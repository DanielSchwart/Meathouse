 <?php
    if (isset($_POST['ztext'])) { $ztext = $_POST['ztext']; if ($ztext == '') { unset($ztext);} } 

    if (isset($_POST['text'])) { $text=$_POST['text']; if ($text =='') { unset($text);} }




$image_path = "images-post/";
$target_file = $image_path . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Файл не является изображением.";
        $uploadOk = 0;
    }
    
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 50000000) {
    echo "Извините, ваш файл слишком большой.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Извините, доступны файлы формата png,jpg,jpeg,gif.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Извините, ваш файл не был загружен.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    }else {
        echo "Была ошибка в загрузке вашего файла.";
    }
}







    if (isset($_POST['vtext'])) { $vtext=$_POST['vtext']; if ($vtext =='') { unset($vtext);} }

    $ztext = stripslashes($ztext);
    $ztext = htmlspecialchars($ztext);
 $text = stripslashes($text);
    $text = htmlspecialchars($text);
 $vtext = stripslashes($vtext);
    $vtext = htmlspecialchars($vtext);
    $today = date("y-m-d");
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
$imagep="../".$target_file;
    $result2 = mysql_query ("INSERT INTO posts (ztext,otext,image,video,date) VALUES('$ztext','$text','$imagep','$vtext','$today')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Текст был успешно добавлен!";
    $idp=mysql_insert_id();}

        

$data['1_text'] = $ztext; 
$data['2_text'] = $text;
$data['image'] = $imagep; 
$data['video'] = $vtext;
$data['date'] = $today;
$placeholders = array("{1_text}", "{2_text}", "{image}", "{video}", "{date}"); 
$new_member_file = str_replace($placeholders, $data, $tpl);
fwrite($fp, $new_member_file); 
fclose($fp); 
echo"<div>
													<div class='row'>
														<div class='col-xs-5'>
															<div class='pagination'>
																<ul>
																	<li><a href='soz-panel.php'>Вернутся к панели добавления новостей</a></li>
																	
																
																	
																</ul>
															</div>
														</div>
														<div class='col-xs-7'>
															<div class='product-result'>
																<span></span>
															</div>
														</div>
															</div>
														</div>"

    ?>