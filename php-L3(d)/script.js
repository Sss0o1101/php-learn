/*
関数式(アロー関数)--------------------------------------------
*/
{
    // 関数宣言
    // function double(num) {
    //   return num * 2;
    // }

    // アロー関数式
    const double = (num) => {
      return num * 2;
    };

    // const double = num => {
    //   return num * 2;
    // };

    // const double = num => num * 2;

    console.log(double(10));
  }