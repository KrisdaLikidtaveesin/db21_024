<table border = 1>
<tr>
<td> P_ID </td>
<td> P_Name </td>
<td> QtyMorethan </td>
<td> Price </td>
<td> ScreenPrice </td>
<td> update </td>
<td> delete </td>
</tr>
<?php foreach( $quotation_list as $quotation ) {
    echo "<tr> 
    <td> $quotation->Q_ID </td>
    <td> $quotation->date </td> 
    <td> $quotation->cusName </td>
    <td> $quotation->cusAddress </td>
    <td> $quotation->cusPhone </td> 
    <td> $quotation->empName </td> 
    <td> update </td>
    <td> delete </td> </tr>"; 
}
echo "</table>";
?>