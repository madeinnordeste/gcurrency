#Gcurrency

Currency converter using Google services. Based on [Google Finance Converter](https://www.google.com/finance/converter)

##Syntax

	Gcurrency::convert($from='USD', $to='BRL', $amount=1)


##Example of use:

	$cotacao = Gcurrency::convert('USD', 'BRL', 10);