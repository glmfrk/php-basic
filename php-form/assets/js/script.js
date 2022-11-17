    const employee = {'faruk' : '23', 'rokib' : '35', 'shahin' : '37'};

    Object.size = function (array){
        var size = 0;
        
        for( var key in array){
            if(array.hasOwnProperty(key))

            size++;
        }
        return size;
    }

    var length = Object.size(employee);
    var arrayKeys = Object.keys(employee);
    var arrayValue = Object.values(employee);
    console.log("Length of Employee array is: " + length);
    console.log("Length of Employee array key is: " + arrayKeys);
    console.log("Length of Employee array value is: " + arrayValue);

    // Array Methods 

    const obj = {
        'Abdullah': 33,
        'Mamun': 42,
        'Khondokar': 45,
        // 'Biplop': 47,
        // 'Shikandar': 36,
        // 'Fokhrul': 30
      }
    //   for (const key in obj) {
    //     const value = obj[key];
    //     console.log(key, value);
    //   }

    for (const key in obj) {
        if (Object.hasOwnProperty.bind(obj, key)) {
            const element = obj[key];
            console.log('key is = ' + key + ', value is = ' + element);
            
        }
    }


        // Duplicate Arrays 

        function hasDuplicates(arr) {
            var counts = [];
        
            for (var i = 0; i <= arr.length; i++) {
                if (counts[arr[i]] === undefined) {
                    counts[arr[i]] = 1;
                } else {
                    return true;
                }
            }
            return false;
        }
        
        // [...]
        
        var arr = [1, 1, 2, 3, 4];
        
        // if (hasDuplicates(arr)) {
        //   alert('Error: you have duplicates values !');
         
          
        // }
        console.log(hasDuplicates(arr));
        
 

 

    