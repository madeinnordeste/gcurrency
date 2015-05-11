#Gcurrency

Currency converter using Google services. Based on [Google Finance Converter](https://www.google.com/finance/converter)

##Syntax

	Gcurrency::convert($from='USD', $to='BRL', $amount=1)


##Example of use:

	$cotacao = Gcurrency::convert('USD', 'BRL', 1);
	
Expected Result:

	(array) Array
	(
    	[0] => 1 USD
	    [1] => 1.7490 BRL
	)