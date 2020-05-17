<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/17
 * Time: 9:45
 */

namespace Algorithm;


class InsertSort
{
    /*
     * 4，插入排序
    插入排序思想：将一组数据分成两组，我分别将其称为有序组与待插入组。每次从待插入组中取出一个元素，与有序组的元素进行比较，并找到合适的位置，将该元素插到有序组当中。就这样，每次插入一个元素，有序组增加，待插入组减少。直到待插入组元素个数为0。
     */
    public function sort($arr)
    {
        $len = count($arr);

        for ($i = 1;$i < $len; $i++) {

            $iTemp = $arr[$i];

            $iPos = $i - 1;

            while (($iPos >= 0) && ($iTemp < $arr[$iPos])) {

                $arr[$iPos + 1] = $arr[$iPos];

                $iPos--;

            }

            $arr[$iPos+1] = $iTemp;

        }

        return $arr;
    }
}