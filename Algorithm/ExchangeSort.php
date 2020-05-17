<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/17
 * Time: 9:43
 */

namespace Algorithm;


class ExchangeSort
{
    /*
     * 2，交换排序
交换排序思想：就是根据数组中两个值的比较结果来对换这两个值在序列中的位置，交换排序的特点是：将值较大的向数组的尾部移动，较小的值向数组的前部移动。
     */
    public function sort($arr)
    {
        $len = count($arr);//获取数组长度

        for ($i = 0;$i < $len - 1; $i++) {

            for ($j = $i + 1; $j < $len; $j++) {

                if ($arr[$j] < $arr[$i]) {

                    $iTemp = $arr[$i];

                    $arr[$i] = $arr[$j];

                    $arr[$j] = $iTemp;

                }

            }

        }
    }
}