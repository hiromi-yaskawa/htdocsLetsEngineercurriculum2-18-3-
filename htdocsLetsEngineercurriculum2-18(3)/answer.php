<link rel="stylesheet" href="answer.css">

<div id="style">
	<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
	<p><?php
$my_name=$_POST['text'];
?>
		<?php echo $my_name;?>さんの結果は・・・？
	</p>
	<span>
		<p>①の答え</p>
		<!--作成した関数を呼び出して結果を表示-->
		<?php
$select=$_POST['question1'];
$answer1=$_POST['answer1'];
function judgement($select,$answer1){

if($select == $answer1){
echo "正解！";
}else {
echo "残念・・・";
}
}
?>

		<?php judgement($select[0],$answer1[0])?>

		<p>②の答え</p>
		<!--作成した関数を呼び出して結果を表示-->
		<?php $select=$_POST['question2'];?>
		<?php $answer2=$_POST['answer2'];?>

		<?php judgement($select[2],$answer2[2])?>

		<p>③の答え</p>
		<!--作成した関数を呼び出して結果を表示-->
		<?php $select=$_POST['question3'];?>
		<?php $answer3=$_POST['answer3'];?>

		<?php judgement($select[1],$answer3[1])?>
</div>
</span>
