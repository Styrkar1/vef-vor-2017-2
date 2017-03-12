<?php  
if(isset($_POST['imgname']) && isset($_POST['imgpath']){
  // if form fields are empty, outputs message, else, gets their data
  if(empty($_POST['imgname']) || empty($_POST['imgpath']){
    echo 'Shit is empty, yo';
  }
  else {
    // adds form data into an array
    $formdata = array(
      'name'=> $_POST['imgname'],
      'imgnpath'=> $_POST['imgpath'],
    );

    $jsondata = json_encode($formdata, JSON_PRETTY_PRINT);

    if(file_put_contents('myndir.json', $jsondata)) echo 'Data successfully saved';
    else echo 'Unable to save data in "myndir.json"';
  }
}
else echo 'Form fields not submited';
?>