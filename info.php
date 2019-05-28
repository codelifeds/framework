<?php

/*function sendHB($money_total, $num) {
    if($money_total < $num*0.01) {
        exit('钱太少');
    }

    $rand_arr = array();
    for($i=0; $i<$num; $i++) {
        $rand = rand(1, 100);
        $rand_arr[] = $rand;
    }

    $rand_sum = array_sum($rand_arr);
    $rand_money_arr = array();
    $rand_money_arr = array_pad($rand_money_arr, $num, 0.01);  //保证每个红包至少0.01

    foreach ($rand_arr as $key => $r) {
        $rand_money = number_format($money_total*$r/$rand_sum, 2);

        if($rand_money <= 0.01 || number_format(array_sum($rand_money_arr), 2) >= number_format($money_total, 2)) {
            $rand_money_arr[$key] = 0.01;
        } else {
            $rand_money_arr[$key] = $rand_money;
        }

    }

    $max_index = $max_rand = 0;
    foreach ($rand_money_arr as $key => $rm) {
        if($rm > $max_rand) {
            $max_rand = $rm;
            $max_index = $key;
        }
    }
}
	
sendHB(1000,3);*/

average(1109,7);

function average($amount,$nums){

    $remain_num = $nums;
    $value = 0;
    for($i = 0 ;$i < $nums ; $i++ ){
        if($remain_num == 1){

            $value = $amount;
        }else{
            $value = round( randomFloat(0.01,$amount/ $remain_num *2),2);

        }

        $amount = bcsub($amount , $value,2);

        $remain_num -= 1;
		printf('第%s个人抢到%s元红包，剩余红包%s元'.PHP_EOL,$i+1,$value,$amount);

    }
}

function randomFloat($min = 0, $max = 1) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

   test_total = 0  
    for i in range(len(random_list)+1):  
        try:  
            num = random_list[0] if i == 0 else random_list[i+1] - random_list[i]  
        except:  
            try:  
                num = total - random_list[i]  
            except:  
                num = total - test_total  
        test_total += num  
        print('第{}个人分配金额{}, 剩余金额{}'.format(i+1, num, total-test_total))  



/*

public  getRandomMoney($amount,$nums) {
    // remainSize 剩余的红包数量
    // remainMoney 剩余的钱
    if (_leftMoneyPackage.remainSize == 1) {
        _leftMoneyPackage.remainSize--;
        return (double) Math.round(_leftMoneyPackage.remainMoney * 100) / 100;
    }
    Random r = new Random();
    double min = 0.01; //
    double max = _leftMoneyPackage.remainMoney / _leftMoneyPackage.remainSize * 2;
    if (max > 6) {
        max = 6;
    }
    double money = r.nextDouble() * max;
    money = money <= min ? 0.01 : money;
    money = Math.floor(money * 100) / 100;
    _leftMoneyPackage.remainSize--;
    _leftMoneyPackage.remainMoney -= money;
    return money;
}

public static void main(String[] args) {

    moneyPackage.remainMoney = 10;
    moneyPackage.remainSize = 9;

    while (moneyPackage.remainSize != 0) {
        System.out.print(Cal.getRandomMoney(moneyPackage) + 6 + "   ");

    }
}
*/



?>
