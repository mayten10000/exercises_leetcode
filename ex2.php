<?php

class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

function addTwoNumbers($l1, $l2){
    $dummyHead = new ListNode(0);
    $current = $dummyHead;
    $carry = 0;

    while ($l1 !== null || $l2 !== null || $carry > 0){
        $val1 = ($l1 !== null) ? $l1->val : 0;
        $val2 = ($l2 !== null) ? $l2->val : 0;

        $sum = $val1 + $val2 + $carry;

        $carry = intval($sum/10);

        $current->next = new ListNode($sum % 10);
        $current = $current->next;

        if ($l1 !== null) $l1 = $l1->next;
        if ($l2 !== null) $l2 = $l2->next;
    }

    return $dummyHead->next;
}

$l1 = new ListNode(2, new ListNode(4, new ListNode(3)));
$l2 = new ListNode(5, new ListNode(6, new ListNode(4)));

$result = addTwoNumbers($l1, $l2);

while ($result !== null) {
    echo $result->val . " ";
    $result = $result->next;
}


?>