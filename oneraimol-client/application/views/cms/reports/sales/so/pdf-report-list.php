<html>
    <head>
        <style type="text/css">

                #wrapper {
                        margin:0 auto;
                        width: 870px;
                        height: 980px;
                }
                #spacer{
                        height:70px;
                }
                #dspacer{
                        height:150px;
                }
                #header {
                        width:190px;
                        height:130px;
                        left: 0px;
                        font-size:12px;
                }
                #container {
                        width:400px;
                }
                #order  {
                        position:absolute;
                        right: 80px;
                        width: 150px;
                }

                #address  {
                        position:absolute;
                        left: 0px;
                        width: 300px;

                }
                #items  {

                }
                #sign {

                }





        </style>
    </head>
    <body>
<div id="wrapper">

<!--header-->
<div id="header">
  <table>
    <tr>
      <td><img src="assets/images/raimol2.png" /></td>
    </tr>
    <tr>
      <td>Unit 5 8/f 20th Drive Corporate Ctr. 20th Drive McKinley Business Park Bonifacio Global City, Taguig MNLA 1634 PH</td>
    </tr>
  </table>  
</div>

<hr/>
        <table>

            <thead>
            <tr>
                    <th>Status</th>
                    <th>SO #</th>
                    <th>PO #</th>
                    <th>Customer</th>
                    <th>Quantity Ordered</th>
<!--                    <th>Total Order Amount</th>-->
            </tr>
            </thead>
            <tbody>

                <?php foreach($salesorder->order_by('so_id', "DESC")->find_all() as $result) :?>
                <tr>
                    <td style="color: <?php echo $result->doccolor_status() ?>; font-weight: bold;">
                    <?php echo $result->doc_status() ?></td>
                    </td>
                    <td><?php echo $result->so_id_string ?></td>
                    <td><?php echo $result->purchaseorders->po_id_string ?></td>

                    <td><?php echo $result->purchaseorders->customers->full_name() ?></td>
                    <td><?php echo $result->purchaseorders->poitems->find_all()->count() ?></td>
<!--                    <td> //echo $result->purchaseorders->order_amount ?></td>-->
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</div>
    </body>
</html>