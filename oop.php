<?
class Board{
	public $title, $content , $author, $date;

	function printn($n){
		for($i=1; $i<=$n; $i++)
		{
			echo  "$i";
		}
	}
}
$object = new board;

$object->printn(7);

?>