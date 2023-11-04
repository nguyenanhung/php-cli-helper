<?php
if (!function_exists('cli_input_ask')) {
    function cli_input_ask($question, $answers = null)
    {
        echo $question . ' ';
        $handle = fopen("php://stdin", "r");
        $answer = fgets($handle);
        fclose($handle);
        $answer = trim($answer);
        if ($answers != null) {
            if (!in_array($answer, $answers)) {
                return cli_input_ask($question, $answers);
            }
        }
        return $answer;
    }
}
