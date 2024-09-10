// ifの構文(js)
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
