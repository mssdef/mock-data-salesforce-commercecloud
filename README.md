## Generate Test/Fake XML data for import into Salesforce CommmerceCloud
Project goal to generate 200K customers, 200K orders and 200K products in 
Salesforce CommmerceCloud database.


# Install
`git clone`

# Run
`N="1";PPFILE="customers"; php ./generateCustomers.php > $PPFILE$N.xml; zip $PPFILE.zip $PPFILE$N.xml`

`N="1";PPFILE="products"; php ./generateProducts.php > $PPFILE$N.xml; zip $PPFILE.zip $PPFILE$N.xml`

`N="1";PPFILE="orders"; php ./generateOrders.php > $PPFILE$N.xml; zip $PPFILE.zip $PPFILE$N.xml`
