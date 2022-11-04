<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
$db_selected = mysqli_select_db($link, "DULIEU");
$rs = mysqli_query($link, "SELECT * FROM PHONGBAN");
echo '<table border = "1" width = "100%">';
echo '<caption>Du lieu bang phong ban</Caption>';
echo '<TR>
        <TH>IDPB</TH>
        <TH>Ten phong ban</TH>
        <TH>Mo ta</TH>
        <TH>Xem nhan vien</TH>

    </TR>';
while($row=mysqli_fetch_array($rs, MYSQLI_BOTH)){
    echo '<TR>
            <TD>'.$row['IDPB'].'</TD>'.
            '<TD>'.$row['Tenpb'].'</TD>'.
            '<TD>'.$row['Mota'].'</TD>'.
            '<TD><a href="xemthongtinNVPB.php?IDPB='.$row['IDPB'].'">Xem</a></TD>'.
            '</TR>';
}
echo '</table>';
mysqli_free_result($rs);
mysqli_close($link);
?>
