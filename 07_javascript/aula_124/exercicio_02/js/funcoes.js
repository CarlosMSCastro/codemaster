function celsius_converter(celsius){
    let k = celsius + 273.15;
    let f = celsius * 1.8 + 32;
    console.log (`Temperatura em Celsius: ${celsius.toFixed(2)}`);
    console.log (`C para K: ${k.toFixed(2)}`);
    console.log (`C para F: ${f.toFixed(2)}`);
}
