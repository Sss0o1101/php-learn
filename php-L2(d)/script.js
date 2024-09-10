/*
ifの構文(js)--------------------------------------------
*/

const score = Number(prompt('Score?'));

if (score >= 90) {
    console.log('A!');
}
 //score が 90 点以上だったら console.log() で A 判定だよという意味でこのように表示。

if (score >= 90) {
    console.log('A!');
} else {
    console.log('Not A!');
}
//score が 90 点未満だったら、 A 判定じゃなかったという意味で Not A! と表示。


if (score >= 90) {
    console.log('A!');
} else if (score >= 70) {
    console.log('B!');
} else {
    console.log('C!');
}
//score が 90 点以上だったら A 判定、90 点未満でなおかつ 70 点以上だったら B 判定。
//そしてさらに、こちらの条件にも合致しなかった場合は、前回見たように、else で繋げればいいので、こちらでは C 判定。



/*
switchで条件分岐--------------------------------------------
*/
const color = prompt('Color?');

switch (color) {
    case 'red':
        console.console.log('stop');
        break;
}
//信号機の色を入力してもらって、それに応じたメッセージを出すというプログラム
//(red)

const color = prompt('Color?');

switch (color) {
    case 'red':
        console.console.log('stop');
        break;
    case 'yellow':
        console.console.log('Slow down!');
        break;
    case 'blue':
        console.console.log('Go!');
        break;
    default:
        console.log('Wrong color');
        break;
}
//red,yellow,blueのケース
//また、これらのどれにも一致しなかった場合の処理も書くことができて、その場合は default とする。

const color = prompt('Color?');

switch (color) {
    case 'red':
        console.log('stop');
        break;
    case 'yellow':
        console.log('Slow down!');
        break;
    case 'blue':
    case 'green':
        console.log('Go!');
        break;
    default:
        console.log('Wrong color');
        break;
}
//青信号は国によっては緑信号だったりするので、ここで blue もしくは green だったらという条件にしたい場合、
//case を case 'blue'; case 'green'; のように繋げて 2 行書く




/*
forの中でforを使う方法--------------------------------------------
*/

let price;
const rate = 1.1;

price = 150;
console.log(price * 120 * rate);
console.log(price * 130 * rate);
console.log(price * 140 * rate);

price++;
console.log(price * 120 * rate);
console.log(price * 130 * rate);
console.log(price * 140 * rate);
//150 円 151 円のときだけでなく、160 円までの売り上げを知りたかった時のケース

let price;
const rate = 1.1;

for (let price = 150; price < 160; price++) {
    console.log(`price: ${price}`);
}

price = 150;
console.log(price * 120 * rate);
console.log(price * 130 * rate);
console.log(price * 140 * rate);

//120 から 140 まで、10 ずつ増やしたいが、10 増やして再代入していくには、以前に見たこちらの記法を使う。

const rate = 1.1;

for (let price = 150; price <= 160; price++) {
  console.log(`Price: ${price}`);
  for (let amount = 120; amount <= 140; amount+=10) {
    console.log(price * amount * rate);
  }
}

/*
論理演算子--------------------------------------------
*/

const english = Number(prompt("English"));
const math = Number(prompt(math));

if (english >= 80 && math >= 80) {
    console.log("A");
} else {
    console.log("B");
}
//英語が 80 点以上なおかつ数学が 80 点以上のケース

const english = Number(prompt('English?'));
const math = Number(prompt('Math?'));

if (!(english >= 80 && math >= 80)) {
  console.log('A');
} else {
  console.log('B');
}
//この条件全体を否定して、英語が 80 点以上なおかつ数学が 80 点以上ではなかったらとしたかったら 
//if (!(english >= 80 && math >= 80)) のように書けば OK.