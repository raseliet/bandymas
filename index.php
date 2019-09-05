<?php
$people = [

    'man' => [
    [
        'name' => 'Tomas',
        'surname' => 'Tomaitis',
        'cnumber' => 3,
        'ws' => [
            'working',
            'do not working'
        ],
    ],
    [
        'name' => 'Petras',
        'surname' => 'Petraitis',
        'cnumber' => 2,
        'ws' => [
            'working',
            'do not working'
        ],
    ],
    ],
    

    'woman' => [
    [
        'name' => 'Ona',
        'surname' => 'Onute',
        'cnumber' => 1,
        'ws' => [
            'working',
            'do not working'
        ],
    ],
],
];

var_dump($people);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
input[type=text], textarea {
  width: 100%;

  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: none;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<h3>Form</h3>

<div class="container">
<form action="" method="post">
    
    <label for="sex">Man/Woman</label>
    <select id="sex" name="sex">

    <?php foreach ($people as $key => $value) :?>
    <option><?php print $key; ?></option>
    <?php endforeach;?>

     </select>

    <label for="name">Name</label>
    <select id="name" name="name">

    <?php if ($_POST['sex'] == 'man'):?>
    <?php foreach ($people['man'] as $key => $man):?>
    <option><?php print $man['name']; ?></option>
    <?php endforeach; ?>
    <?php else: ?>
    <?php foreach ($people['woman'] as $key => $woman):?>
    <option><?php print $woman['name'];?></option>
    <?php endforeach; ?>
    <?php endif ?>
   
    </select>
    <input type="submit" value="Pateikti">
    
    <textarea id="subject" name="subject" placeholder="" style="height:400px; "></textarea>
    
   
  </form>
</div>


</body>
</html>


<?php foreach ($people['man'] as $key => $man) {
    print $man['name'];
    
}
?>

<?php foreach ($people['woman'] as $key => $woman) {
    print $woman['name'];
    
}
?>


