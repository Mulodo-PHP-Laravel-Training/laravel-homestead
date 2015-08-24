<?php
const RATES_OF_I_TAX = 10;
const RATES_OF_H_INS = 1.5;
const RATES_OF_S_INS = 7;

/**
 * Function to calculate salary
 * @param int salary
 * @return int net salary
 */
function calc( $salary ) {
	$deduction ['tax'] = $salary * (RATES_OF_I_TAX / 100);
	$deduction ['health_insurance'] = $salary * (RATES_OF_H_INS / 100);
	
	$deduction ['social_insurance'] = $salary * (RATES_OF_S_INS / 100);
	$tmp = $salary - $deduction ['tax'] - $deduction ['health_insurance'] - $deduction ['social_insurance'];
	return $tmp;
}
/**
 * Function to print salary
 * @param int gross salary
 * @param	int home pay
 * @return string message
 */
function printIncomeInfo( $gross, $homepay ) {
	$content = "Gross income: " . $gross . " doller\nNet income:   $homepay doller\n";
	if (3000 >= $gross) {
		$content .= "You're glowing up now!\nDo your best at work!\n";
	} else {
		$content .= "You get great salary!\nDo your best at work!\n";
	}
	return $content;
}

$gross = 1000;
$net = calc ( $gross );
echo printIncomeInfo ( $gross, $net );