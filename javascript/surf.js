$(document).ready(function(){
    var filteredIDArr = [];
var newArr = [];

var currentlyChecked = [];
var matchingURLArr = [];

$('#showInfo').click(function() {
    $('#info-hidden').toggle();
})

$('#minimize').click(function() {
    //console.log('yay');
    $('#controls').css("display", "none");
    $('#miniPanel').css("display", "block");
    $('iframe').css("height", "100%");
});

$('#maximize').click(function() {
    $('#controls').css("display", "block");
    $('#miniPanel').css("display", "none");
    $('iframe').css("height", "780px");
});

$('#surf').click(function() {
    var idListArr = idArr;
    $(this).effect("bounce", "slow");
    // loops thru matching URL and pulls indices from urlArr and adds it to filteredIDArr




    // I need to define filteredIDArr here

    displayTaggedSites();

    // end

    // picks a random number from array
    function genRandomNumber() {
        // if there is no filter on...
        if (matchingURLArr.length === 0) {
            var rand = idListArr[Math.floor(Math.random() * idListArr.length)];
            addToArray(idListArr, rand);
            return rand;
        } else {
            //console.log('yes filter');
            // filteredIDArr is empty still here - it needs to be defined first.
            var rand = filteredIDArr[Math.floor(Math.random() * filteredIDArr.length)];
            addToFilteredArray(filteredIDArr, rand);
            //console.log('filteredrand is ' + rand);
            return rand;
        }
    }

    genRandomNumber();


    // checks if the selected number is a duplicate
    function checkIfDupe(idListArr, rand) {

        // if matchingURLArr does not exist
        // aka if filter is OFF
        if (matchingURLArr.length === 0) {

            if (newArr.length === idListArr.length) {
                // console.log('array is full');
                newArr = [];
            }
        } else {
            if (newArr.length === filteredIDArr.length) {
                newArr = [];
            }
        }
        //console.log('rand is...' + rand);
        if (newArr.includes(rand)) {
            return true;
        } else {
            return false;
        }
    }

    // this tracks the IDs of the sites that have been viewed
    function addToArray(idListArr, rand) {
        if (checkIfDupe(idListArr, rand) === true) {
            //console.log('this is a duplicate');
            genRandomNumber();
        } else {
            const index = idListArr.indexOf(rand);
            if (index > -1) {
                idListArr.slice(index, 1)
                newArr.push(rand);
                console.log(newArr);
            }
            // console.log('idListArr is ' + idListArr);

            if (newArr.length === idListArr.length) {
                //console.log('yeeeeuhhhhh')
            }
            //console.log(newArr);
            //console.log('rand is ' + rand);
            var linkBefore = `<a href="https://`;
            var linkAfter = `/">`
            var linkToDisplayB = `https://`;
            var linkToDisplayA = `/`;
            var getIndex = idListArr.indexOf(rand);
            //console.log('index is ' + getIndex);
            var myNum = getIndex;
            if (myNum === -1) {
                //console.log('negative');
                myNum = 0;
            }
            console.log('rand is ' + rand);

            var result = linkBefore + urlArr[myNum] + linkAfter + "here" + "</a>";
            var linkTarget = linkToDisplayB + urlArr[myNum] + linkToDisplayA;
            console.log(result);
            $('#results').html(result)
            $('#mainFrame').attr("src", linkTarget);
        }
    }




    // this tracks filters
    function addToFilteredArray(filteredIDArr, rand) {
        if (checkIfDupe(filteredIDArr, rand) === true) {
            console.log('this is a duplicate');
            genRandomNumber();
        } else {
            console.log('rand is actually...' + rand);
            const index = filteredIDArr.indexOf(rand);
            if (index > -1) {
                filteredIDArr.slice(index, 1)
                newArr.push(rand);
                console.log('newArr is ' + newArr);
            }
            console.log('filteredIDArr is....' + filteredIDArr);

            if (newArr.length === idListArr.length) {
                //console.log('yeeeeuhhhhh')
            }
            console.log('newArr is...' + newArr);
            //console.log('rand is ' + rand);
            var linkBefore = `<a href="https://`;
            var linkAfter = `/">`
            var linkToDisplayB = `https://`;
            var linkToDisplayA = `/`;
            var getIndex = filteredIDArr.indexOf(rand);
            console.log('index is ' + getIndex);
            var myNum = getIndex;
            // if (myNum === -1) {
            //  console.log('negative');
            //  myNum = 0;
            // }
            //console.log('rand is ' + rand);
            console.log('matchingURL... ' + matchingURLArr);
            var result = linkBefore + matchingURLArr[myNum] + linkAfter + matchingURLArr[myNum] + "</a>";
            var linkTarget = linkToDisplayB + matchingURLArr[myNum] + linkToDisplayA;
            console.log('result is...' + result);
            $('#results').html(result)
            $('#mainFrame').attr("src", linkTarget);
        }
    }
});

$('#minSurf').click(function() {
    var idListArr = idArr;

    // loops thru matching URL and pulls indices from urlArr and adds it to filteredIDArr




    // I need to define filteredIDArr here

    displayTaggedSites();

    // end

    // picks a random number from array
    function genRandomNumber() {
        // if there is no filter on...
        if (matchingURLArr.length === 0) {
            var rand = idListArr[Math.floor(Math.random() * idListArr.length)];
            addToArray(idListArr, rand);
            return rand;
        } else {
            //console.log('yes filter');
            // filteredIDArr is empty still here - it needs to be defined first.
            var rand = filteredIDArr[Math.floor(Math.random() * filteredIDArr.length)];
            addToFilteredArray(filteredIDArr, rand);
            //console.log('filteredrand is ' + rand);
            return rand;
        }
    }

    genRandomNumber();


    // checks if the selected number is a duplicate
    function checkIfDupe(idListArr, rand) {

        // if matchingURLArr does not exist
        // aka if filter is OFF
        if (matchingURLArr.length === 0) {

            if (newArr.length === idListArr.length) {
                // console.log('array is full');
                newArr = [];
            }
        } else {
            if (newArr.length === filteredIDArr.length) {
                newArr = [];
            }
        }
        //console.log('rand is...' + rand);
        if (newArr.includes(rand)) {
            return true;
        } else {
            return false;
        }
    }

    // this tracks the IDs of the sites that have been viewed
    function addToArray(idListArr, rand) {
        if (checkIfDupe(idListArr, rand) === true) {
            //console.log('this is a duplicate');
            genRandomNumber();
        } else {
            const index = idListArr.indexOf(rand);
            if (index > -1) {
                idListArr.slice(index, 1)
                newArr.push(rand);
                console.log(newArr);
            }
            // console.log('idListArr is ' + idListArr);

            if (newArr.length === idListArr.length) {
                //console.log('yeeeeuhhhhh')
            }
            //console.log(newArr);
            //console.log('rand is ' + rand);
            var linkBefore = `<a href="https://`;
            var linkAfter = `/">`
            var linkToDisplayB = `https://`;
            var linkToDisplayA = `/`;
            var getIndex = idListArr.indexOf(rand);
            //console.log('index is ' + getIndex);
            var myNum = getIndex;
            if (myNum === -1) {
                //console.log('negative');
                myNum = 0;
            }
            console.log('rand is ' + rand);

            var result = linkBefore + urlArr[myNum] + linkAfter + urlArr[myNum] + "</a>";
            var linkTarget = linkToDisplayB + urlArr[myNum] + linkToDisplayA;
            console.log(result);
            // $('#results2').html(result)
            $('#mainFrame').attr("src", linkTarget);
        }
    }




    // this tracks filters
    function addToFilteredArray(filteredIDArr, rand) {
        if (checkIfDupe(filteredIDArr, rand) === true) {
            console.log('this is a duplicate');
            genRandomNumber();
        } else {
            console.log('rand is actually...' + rand);
            const index = filteredIDArr.indexOf(rand);
            if (index > -1) {
                filteredIDArr.slice(index, 1)
                newArr.push(rand);
                console.log('newArr is ' + newArr);
            }
            console.log('filteredIDArr is....' + filteredIDArr);

            if (newArr.length === idListArr.length) {
                //console.log('yeeeeuhhhhh')
            }
            console.log('newArr is...' + newArr);
            //console.log('rand is ' + rand);
            var linkBefore = `<a href="https://`;
            var linkAfter = `/">`
            var linkToDisplayB = `https://`;
            var linkToDisplayA = `/`;
            var getIndex = filteredIDArr.indexOf(rand);
            console.log('index is ' + getIndex);
            var myNum = getIndex;
            // if (myNum === -1) {
            //  console.log('negative');
            //  myNum = 0;
            // }
            //console.log('rand is ' + rand);
            console.log('matchingURL... ' + matchingURLArr);
            var result = linkBefore + matchingURLArr[myNum] + linkAfter + matchingURLArr[myNum] + "</a>";
            var linkTarget = linkToDisplayB + matchingURLArr[myNum] + linkToDisplayA;
            console.log('result is...' + result);
            $('#results').html(result)
            $('#mainFrame').attr("src", linkTarget);
        }
    }
});



function getAllIndexes(arr, val) {
    var indexes = [],
        i;
    for (i = 0; i < arr.length; i++)
        if (arr[i] === val)
            indexes.push(i);
    return indexes;
}

function getOccurrence(array, value) {
    var count = 0;
    array.forEach((v) => (v === value && count++));
    return count;
}

// this is just for testing purposes, it shows me the whole db
for (let i = 0; i < idArr.length; i++) {
    $('#displayTable').append(idArr[i] + " " + urlArr[i] + " " + catArr[i] + "<br>")
}

// listens to when a checkbox is checked
$('input:checkbox').change(
    function() {

        var toRemoveIndexArr = [];
        var toRemoveURLArr = [];
        var indicesToRemove = [];



        // if checked, add to array
        if ($(this).is(":checked")) {

            currentlyChecked.push($(this).val());
            displayTaggedSites();


            // if unchecked, remove from array...
        } else {
            filteredIDArr = [];
            displayTaggedSites();
            //console.log('this is ' + $(this).val())


            // if this tag has more than one item associated with it...
            if (getOccurrence(catArr, $(this).val()) > 1) {

                // get the indices of all tags
                console.log('this tag occurs more than once.')
                toRemoveIndexArr = getAllIndexes(catArr, $(this).val());
                console.log('toRemoveIndexArr...' +
                    toRemoveIndexArr); // need to remove these indices in matchingURLArr...

                // loop through the indexes to remove
                for (let i = 0; i < toRemoveIndexArr.length; i++) {
                    var item = toRemoveIndexArr[i];
                    var indexInArr = matchingURLArr.indexOf(urlArr[item]);
                    matchingURLArr.splice(indexInArr, 1);
                }

                // if there isn't more than one item associated with it...
            } else {
                toRemoveIndexArr = catArr.indexOf($(this).val())
                var indexInArr = matchingURLArr.indexOf(urlArr[toRemoveIndexArr]);
                matchingURLArr.splice(indexInArr, 1);
                //console.log('<1 ' + toRemoveIndexArr);
            }
            console.log('unchecked matchingURLArr empty?' + matchingURLArr);
            // find index of item in array (e.g., 'apple');
            var tagIndex = currentlyChecked.indexOf($(this).val());
            currentlyChecked.splice(tagIndex, 1);
        }
    });




function displayTaggedSites() {

    // creates an array of indexes where the selected tag appears
    var taggedArr = [];
    var flattenedArr = [];


    // this loops through currentlyChecked and adds all indices to array
    for (i = 0; i < currentlyChecked.length; i++) {
        taggedArr.push(getAllIndexes(catArr, currentlyChecked[i]));

        // this flattens the array because it was 2D before
        // this holds an array of the selected items' INDEX
        flattenedArr = taggedArr.flat();

    }

    if (flattenedArr.length > 0) {
        //console.log('success!');
        //
        //console.log('doing nothing');
        //
        // this populates matchingURLArr with checked items
        for (let i = 0; i < flattenedArr.length; i++) {
            var item = flattenedArr[i];
            // add the URL
            if (matchingURLArr.includes(urlArr[item])) {
                // console.log('doing nothing');
            } else {
                // console.log('not a dupe');
                matchingURLArr.push(urlArr[item]);
            }

            // I need to add this in eventually
            for (let i = 0; i < matchingURLArr.length; i++) {
                var indexy = matchingURLArr[i];


                // WORKING HERE //




                // pushes the ID to
                if (filteredIDArr.includes(urlArr.indexOf(indexy))) {
                    //console.log('wahh duplicate');
                    // a duplicate number has been entered
                    //genRandomNumber();
                    //console.log("duplicatedddd");
                } else {
                    filteredIDArr.push(urlArr.indexOf(indexy));
                }
            }

            // filteredArr should be clearing out at some point
            // possibly after load?
            console.log('filteredIDArr is ' + filteredIDArr);



        }


    }

    // this variable shows a filtered list of URLs
    console.log('matchingURLArr is ' + matchingURLArr);


}

$("#miniPanel").draggable();

});