<?php
declare(strict_types=1);



function solution($nums) {
    if ($nums === null || empty($nums)) {
        return [];
    }
    sort($nums);
    return $nums;
}

function solutionSmart($nums): array {
    $nums = $nums ?? [];
    sort($nums);
    return $nums;
}

// Test cases
var_dump(solution([1, 2, 10, 50, 5])); // should return [1,2,5,10,50]
var_dump(solution(null)); // should return []