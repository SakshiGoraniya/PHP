<?php
class DivideByZeroException extends Exception {};
class DivideByNegativeException extends Exception {};
function process($denominator)
{
	try
	{
		if ($denominator == 0)
		{
			throw new DivideByZeroException();
		}
		else if ($denominator < 0)
		{
			throw new DivideByNegativeException();
		}
		else
		{
			echo $denominator;
		}
	}
	catch (DivideByZeroException $ex)
	{
		echo "DIVIDE BY ZERO EXCEPTION!";
	}
	catch (DivideByNegativeException $ex)
	{
		echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION!";
	}
	catch (Exception $x)
	{
	echo "UNKNOWN EXCEPTION!";
	}
}
process(0);
process(-1);
process(8);
?>