<?php

class AdminController extends CController
{
    public $layout = 'main';

    public function init()
    {
        if (Yii::app()->user->isGuest) {
            Yii::app()->getController()->redirect('/site/login');
            Yii::app()->end();
        }

        $cs = Yii::app()->clientScript;
        $cs->registerCoreScript('jquery');
        $cs->registerCoreScript('jquery.ui');
        $cs->registerScriptFile($this->createUrl('/js/jquery.maskedinput.min.js'));

        $cs->registerCssFile($this->createUrl('/css/bootstrap.min.css'));

        $cs->registerCssFile($this->createUrl('/css/main.css'));

        $cs->registerScriptFile($this->createUrl('/js/action.js'));
        $cs->registerScriptFile($this->createUrl('/js/bootstrap.min.js'));
        $cs->registerScriptFile($this->createUrl('/js/bootstrap-modal.min.js'));


        $cs->registerCssFile($this->createUrl('/css/bootstrap-theme.min.css'));
        $cs->registerCssFile($this->createUrl('/css/jumbotron-narrow.css'));
        $cs->registerCssFile($this->createUrl('/css/admin.css'));
        $cs->registerScriptFile($this->createUrl('/js/admin.js'));

    }

    public function actions()
    {
        return array(
            'upload' => array(
                'class' => 'xupload.actions.XUploadAction',
                'path' => Yii::app()->getBasePath() . "/../uploads",
                'publicPath' => Yii::app()->getBaseUrl() . "/uploads",
            ),
        );
    }


    public function actionIndex()
    {
        $user = User::model()->findByPk(1);
        if (isset($_POST['User'])) {
            if (!empty($_POST['User']['username']) && !empty($_POST['User']['password'])) {
                $user->username = $_POST['User']['username'];
                $user->password = md5($_POST['User']['password']);
                $user->save(false);
                echo json_encode(array('status' => 'succses'));

            }
            Yii::app()->end();
        }
        $this->render('index', array('user' => $user));
    }

    public function actionCalendar()
    {
        $datapick = new Datapick;

        $models = Datapick::model()->jsonePrepeare(Datapick::model()->findAllByAttributes(array('status' => Datapick::STATUS_APPROVED)));

        $this->render('calendar', array('datapick' => $datapick, 'models' => $models));
    }

    public function actionSetDatapick()
    {

        Datapick::model()->setDatapick();

        echo json_encode(array('status' => 'success'));

    }

    public function actionPopupPrepear()
    {

        $id = $_POST['datapick_id'];

        $model = Datapick::model()->findByPk($id);

        $this->renderPartial('_popup_prepear', array('model' => $model));

    }

    public function actionPopupSender()
    {
        $response = array('status' => 'success');
        $id = $_POST['datapick_id'];
        $model = Datapick::model()->findByPk($id);
        $model->attributes = $_POST['Datapick'];


        if (!$model->confirmation()) {
            $response = array(
                'status' => 'error',
                'message' => array(array("Домик №$model->home_id уже занят $model->datapick"))
            );
        } else {
            if (!$model->save()) {
                $response = array(
                    'status' => 'error',
                    'message' => $model->getErrors()
                );
            }
        }


        echo json_encode($response);
    }


    public function actionForm($home_id = 1)
    {
        $criteria = new CDbCriteria;
        $criteria->compare('t.id', $home_id);
        $criteria->order = 'upload.created DESC';

        $model = Home::model()->with('upload')->find($criteria);


        Yii::import("xupload.models.XUploadForm");
        $photos = new XUploadForm;
        //Check if the form has been submitted
        if (isset($_POST['Home'])) {
            //Assign our safe attributes
            $model->attributes = $_POST['Home'];
            //Start a transaction in case something goes wrong
            $transaction = Yii::app()->db->beginTransaction();
            try {
                //Save the model to the database
                if ($model->save()) {
                    $transaction->commit();
                }
            } catch (Exception $e) {
                $transaction->rollback();
                Yii::app()->handleException($e);
            }

            echo CJSON::encode(array('status' => 'success'));
            Yii::app()->end();
        }
        $this->render('form', array(
            'model' => $model,
            'photos' => $photos,
            'home_id' => $home_id,
            'files' => CJSON::encode($model->upload)
        ));
    }

    public function actionUpload()
    {
        Yii::import("xupload.models.XUploadForm");
        //Here we define the paths where the files will be stored temporarily
        $path = Yii::app()->getBasePath() . "/../uploads/";


        $publicPath = Yii::app()->getBaseUrl() . "/uploads/";

        //This is for IE which doens't handle 'Content-type: application/json' correctly
        header('Vary: Accept');
        if (isset($_SERVER['HTTP_ACCEPT'])
            && (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
        ) {
            header('Content-type: application/json');
        } else {
            header('Content-type: text/plain');
        }

        //Here we check if we are deleting and uploaded file
        if (isset($_GET["_method"])) {
            if ($_GET["_method"] == "delete") {
                if ($_GET["file"][0] !== '.') {
                    $file = $path . $_GET["file"];
                    if (is_file($file)) {
                        unlink($file);
                    }
                }
                echo json_encode(true);
            }
        } else {
            $model = new XUploadForm;
            $model->file = CUploadedFile::getInstance($model, 'file');
            //We check that the file was successfully uploaded
            if ($model->file !== null) {
                //Grab some data
                $model->mime_type = $model->file->getType();
                $model->size = $model->file->getSize();
                $model->name = $model->file->getName();
                //(optional) Generate a random name for our file
                $filename = md5(Yii::app()->user->id . microtime() . $model->name);
                $filename .= "." . $model->file->getExtensionName();
                if ($model->validate()) {
                    //Move our file to our temporary dir
                    $cource = $path . $filename;
                    $model->file->saveAs($cource);
                    chmod($cource, 0777);


                    $thumb_file = $path . 'thumbs' . DIRECTORY_SEPARATOR . $filename;


                    if (!copy($cource, $thumb_file)) {
                        die("не удалось скопировать");
                    }

                    Yii::app()->ih->load($thumb_file)
                        ->resize(Upload::width, Upload::height, true)
                        ->save(false, false, 100);


                    //Now we need to save this path to the user's session
                    if (Yii::app()->user->hasState('images')) {
                        $userImages = Yii::app()->user->getState('images');
                    } else {
                        $userImages = array();
                    }
                    $userImages[] = array(
                        "path" => $path . $filename,
                        //the same file or a thumb version that you generated
                        "thumb" => $path . $filename,
                        "filename" => $filename,
                        'size' => $model->size,
                        'mime' => $model->mime_type,
                        'name' => $model->name,
                    );
                    Yii::app()->user->setState('images', $userImages);

                    //Now we need to tell our widget that the upload was succesfull
                    //We do so, using the json structure defined in
                    // https://github.com/blueimp/jQuery-File-Upload/wiki/Setup
                    echo json_encode(array(array(
                        "name" => $model->name,
                        "type" => $model->mime_type,
                        "size" => $model->size,
                        "url" => $publicPath . $filename,
                        "thumbnail_url" => $publicPath . "thumbs/$filename",
                        "delete_url" => $this->createUrl("upload", array(
                                "_method" => "delete",
                                "file" => $filename
                            )),
                        "delete_type" => "POST"
                    )));
                } else {
                    //If the upload failed for some reason we log some data and let the widget know
                    echo json_encode(array(
                        array("error" => $model->getErrors('file'),
                        )));
                    Yii::log("XUploadAction: " . CVarDumper::dumpAsString($model->getErrors()),
                        CLogger::LEVEL_ERROR, "xupload.actions.XUploadAction"
                    );
                }
            } else {
                throw new CHttpException(500, "Could not upload file");
            }
        }
    }


    public function actionDeleteUpload($id)
    {
        Upload::model()->deleteByPk($id);

        echo CJSON::encode(array('status' => 'success'));
    }

    public function actionCallback()
    {
        $callback = new Callback();
        $this->render('callback', array(
            'callback' => $callback
        ));
    }

    public function actionReview()
    {
        $review = new Review();
        $this->render('review', array(
            'review' => $review
        ));
    }


}