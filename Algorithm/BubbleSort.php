<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/17
 * Time: 9:39
 */

namespace Algorithm;


class BubbleSort
{
    /*
     * 1，冒泡排序
        冒泡排序思想：以升序为例，从第一个元素开始，对数组中两两相邻的元素进行比较，将较小的元素放在前边，较大的元素放在后边。一轮比较结束之后，一个最大的数沉底，成为数组中的最后一个元素。n个元素，经过n-1轮的比较之后完成排序。
     */
    public function sort($arr)
    {
        $len = count($arr);//获取数组长度

        for ($i = 1; $i < $len; $i++) {

            for ($j = $len - 1; $j >= $i ; $j--) {

                if ($arr[$j] < $arr[$j-1]) {//相邻两个元素进行比较

                    $iTemp = $arr[$j-1];

                    $arr[$j-1] = $arr[$j];

                    $arr[$j] = $iTemp;

                }

            }

        }
        return $arr;
    }

}