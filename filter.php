<?php include 'navigation.php';
// Fetching variables of the form which travels in URL
$lang_type = $_GET['lang_type'];
$lang_filter_type = $_GET['lang_filter_type'];
$dance_type = $_GET['dance_type'];
$dance_filter_type = $_GET['dance_filter_type'];
//echo('<script>alert($lang_type);</script>');
if($lang_type !=''&& $lang_filter_type !=''&& $dance_type !=''&& $dance_filter_type !='')
{
//  To redirect form on a particular page
header("Location:index.php");
die(); //graceful exit
}
else{
  //echo('<script>alert("is empty for all");</script>');
}
?>
?>
<html>
<head>
<style type="text/css">
	.form-horizontal{
		position: absolute;
		top:400px;
	}
	.btn-custom{
		position: absolute;
		top:200px;
		left: 100px;
	}
	.black-text{
		color: black;
	}
	.form-control{
		width:150%;
	}
</style>	
</head>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Filter</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label black-text" for="selectbasic">Filter By Language</label>
  <div class="col-md-4">
    <select id="selectbasic" name="lang_type" class="form-control">
      <option value="1">Telegu</option>
      <option value="2">English</option>
      <option value="3">Hindi</option>
      <option value="4">Bengali</option>
      <option value="5">Other</option>
      <option value="6">Malanyam</option>
    </select>
    <select id="filter_option_for_languages" name="lang_filter_type" class="form-control">
      <option value="1">Include</option>
      <option value="2">Exclude</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label black-text" for="selectbasic">Filter By Type</label>
  <div class="col-md-4">
    <select id="selectbasic" name="dance_type" class="form-control">
      <option value="1">Classical</option>
      <option value="2">Traditional</option>
      <option value="3">Folk</option>
      <option value="4">Other</option>
    </select>
    <select id="filter_option_for_dances" name="dance_filter_type" class="form-control">
      <option value="1">Include</option>
      <option value="2">Exclude</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Button"></label>
  <div class="col-md-4">
    <button id="Button" name="Button" class="btn btn-success" type="submit" name='submit' formmethod="get">Submit!</button>
  </div>
</div>

</fieldset>
</form>
