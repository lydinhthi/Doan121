<?php
function dem($a){//biến $a là idsp lấy trên link: chitiet.php?idsp=
//$data['capdoi']=array();
//$data['phanloai']=array();
//$data['dem']=array();
$x=array();$y=array();$z=array();
	$sql="select * from hoadonsp where idsp='$a'";
	$query=select_list($sql);
	if ($query){foreach($query as $value){
		$idhd=$value['idhd'];
		$sql1="select * from hoadonsp where idsp<>'$a' and idhd='$idhd'";
		$query1=select_list($sql1);
		if($query1){foreach($query1 as $value1){
			$x[]=$value1['idsp'];
		}}
	}}//echo "a<pre>";print_r($x) ;echo "</pre>";//exit();*/
	if($x){
	foreach($x as $key=>$value){
			$y[$value][]=$key;
		}}//echo "b<pre>";print_r($y) ;echo "</pre>";//exit()*/
	if($y){	
	foreach($y as $key=>$value){
		$z[]=array('value'=>$key,'count'=>count($value));
	}}//echo "c<pre>";print_r($z) ;echo "</pre>";exit();
return $z;
}
///////////////////////////////////////////////////////
function sapxep($a){  
	$b=count($a);
    $temp=array();$str=1;
   for($i=1; $i<$b and $str==1; $i++)
   {
    $str=0;
      for($j=0;$j < $b-$i; $j++)
            if($a[$j]['count'] < $a[$j+1]['count'])
        {
            $str=1;
            $temp=$a[$j];
            $a[$j]=$a[$j+1];
            $a[$j+1]=$temp;
        }
   }
return $a;
}
/////////////////////////////////////////////////
function layra($a){
	$data['layra']=array();
	$i=count($a);
	if($i>4){$i=4;}
	for($j=0;$j<$i;$j++){
		$data['layra'][$j]=$a[$j];

	}
	return $data['layra'];
}
////////////////////////////////////////////////////////////
?>
<?php
if(isset($_REQUEST['idsp'])){
	$idsp=$_REQUEST['idsp'];$b=dem($idsp);$c=sapxep($b);$d=layra($c);  
	/*echo "1<br>";
	echo "<pre>";print_r($b) ;echo "</pre>";//exit();
	echo "2<br>";
	echo "<pre>";print_r($c) ;echo "</pre>";//exit();
	echo "3<br>";
	echo "<pre>";print_r($d) ;echo "</pre>";exit();*/
	$sql="select * from sanpham where idsp='$idsp'";
	$query=select_one($sql);
	$idnhom=$query['idnhom'];
	$sql1="select * from nhom where idnhom='$idnhom'";
	$query1=select_one($sql1);
	$idloai=$query1['idloai'];
	$sql2="select * from loai where idloai='$idloai'";
	$query2=select_one($sql2);
	$price=number_format($query['price'],0,'','.');
	
}
?>
<div class="content">
	<div class="detail">
		<div class="space">
			<div class="tieudespnoibat"><span style="font-size:20px;font-weight:bold;color:black;margin-left:5px;line-height:42px"><?php echo $query1['tennhom'] ; ?></span>
			</div>
		</div>
		<div class="nd">
			<a href="index.php">Trang chủ</a>>><a href="loaisp.php?idl=<?php echo $query2['idloai'];?>"><?php echo $query2['tenloai'] ; ?></a>>><a href="nhomsp.php?idn=<?php echo $query1['idnhom'];?>"><span style="font-weight:bold;color:red;font-size:20px"><?php echo $query1['tennhom'] ; ?></a></span>
			<div class="clear-both"></div>
			<div class="ct">
				<div class="image">
					<img src="images/<?php echo $query['image'];?>" width="210px">
				</div>
				<div class="infor">
					<span style="font-weight:bold;font-size:20px;color:blue"><?php echo $query['tensp'] ; ?></span>
					<div class="clear-both"></div>
					<div class="gia">
						<li></li>
					</div>
					<div class="so"><a><?php echo $price ; ?> đ</a>
					</div>
					<div class="muahang"><li><a href="giohang.php?idsp=<?php echo $query['idsp']; ?>">Mua hàng</a></li>
					</div>
					<div class="clear-both"></div>
					<span style="color:#4F4F4F"><p>Mô tả:<?php echo $query['description'] ; ?></p>
					</br>
					<span style="color:#4F4F4F">Xuất sứ:<?php echo $query['madein'] ; ?>
					</br>
					</br>
					Liên hệ:Địa chỉ: 926, Đống Đa, Hà Nội
					</br>
					ĐT: 0943.000.901 | 0943.000.901
					</br>
					Email:khanhthaosport@gmail.com
					</span>
				</div><!--end infor-->
				<div class="vip">
					<span style="font-weight:bold;color:#4F4F4F;margin-left:10px">CÓ THỂ BẠN SẼ THÍCH
					<div class="clear-both"></div>
<?php 
if($d){
	foreach($d as $key=>$value){$id=$value['value'];$id=trim($id);
	$sql3="select * from sanpham where idsp='$id'";
	$query3=select_one($sql3);
?>
					<div class="sp">
						<div class="imagesp"><a href="detail.php?idsp=<?php echo $query3['idsp'];?>"><img src="images/<?php echo $query3['image'];?>"/></a></div>
						<div class="tensp"><a style="font-size:13px;" href="detail.php?idsp=<?php echo $query3['idsp'];?>"><?php echo $query3['tensp'];?></a></div>
						<div class="giasp"><a>Giá:<span style="color:red"><?php echo number_format($query3['price'],0,'','.');?> đ</span></a></div>
						<div class="chitiet"><li><a href="detail.php?idsp=<?php echo $query3['idsp'];?>">Chi tiết</a></li></div>
						<div class="muahang"><li><a href="giohang.php?idsp=<?php echo $query3["idsp"] ;?>">Mua hàng</a></li></div>
					</div>
				<?php }}else{echo "ko co san pham lien quan";} ?>	
				</div>
			</div><!--end ct-->
		</div><!--end chitiet-->
	</div><!--end detail-->
</div><!--end content-->