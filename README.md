## Generate Mock/Fake XML data for import into Salesforce CommmerCloud


# Install
`git clone`

# Run
`N="1";PPFILE="customers"; php ./generateCustomers.php > $PPFILE$N.xml; zip $PPFILE.zip $PPFILE$N.xml`

`N="1";PPFILE="products"; php ./generateProducts.php > $PPFILE$N.xml; zip $PPFILE.zip $PPFILE$N.xml`

`N="1";PPFILE="orders"; php ./generateOrders.php > $PPFILE$N.xml; zip $PPFILE.zip $PPFILE$N.xml`
