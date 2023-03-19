function createMultiplier(num){
    return function(multiplier){
        return num * multiplier
    }
}

let multiplyByTwo = createMultiplier(3);
console.log(multiplyByTwo(10));