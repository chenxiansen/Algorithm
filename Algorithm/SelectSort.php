<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/17
 * Time: 9:44
 */

namespace Algorithm;


class SelectSort
{
    /*
     * 3，选择排序
        选择排序思想：它的工作原理是每一次从待排序的数据元素中选出最小（或最大）的一个元素，存放在序列的起始位置，直到全部待排序的数据元素排完。 选择排序是不稳定的排序方法（比如序列[5， 5， 3]第一次就将第一个[5]与[3]交换，导致第一个5挪动到第二个5后面）。
     */
    public function sort($arr)
    {
        $len = count($arr);//获取数组长度
        for ($i = 0;$i < $len-1; $i++) {

            $iTemp = $arr[$i];

            $iPosition = $i;

            for ($j = $i + 1;$j < $len; $j++){

                if ($arr[$j] < $iTemp) {

                    $iTemp = $arr[$j];

                    $iPosition = $j;

                }

            }

            $arr[$iPosition] = $arr[$i];

            $arr[$i] = $iTemp;

        }

        return $arr;
    }
}