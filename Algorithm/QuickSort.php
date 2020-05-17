<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/17
 * Time: 9:35
 */


namespace Algorithm;

class QuickSort
{
    /*
     * 快速排序思想：
    1．先从数列中取出一个数作为基准数，记为x。
    2．分区过程，将不小于x的数全放到它的右边，不大于x的数全放到它的左边。（这样key的位置左边的没有大于key的，右边的没有小于key的，只需对左右区间排序即可）
    3．再对左右区间重复第二步，直到各区间只有一个数
     */

    public function sort($arr)
    {
        $num = count($arr);

        $l = $r = 0;

        $left = $right = array();

        for ($i = 1;$i < $num; $i++) {

            if ($arr[$i] < $arr[0]) {

                $left[] = $arr[$i];

                $l++;

            } else {

                $right[] = $arr[$i];

                $r++; //

            }

        }

        if($l > 1) {

            $left = QuickSort($left);

        }

        $new_arr = $left;

        $new_arr[] = $arr[0];

        if ($r > 1) {

            $right = QuickSort($right);

        }

        for($i = 0;$i < $r; $i++) {

            $new_arr[] = $right[$i];

        }

        return $new_arr;

    }

}