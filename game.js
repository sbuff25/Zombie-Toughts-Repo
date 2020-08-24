const textNodes = [{
            id: 1,
            vidtime: 1000,
            vid: 'video/sample.mp4', // kick-out
            text: 'Choose if Sam is a Annie or Hamilton',
            options: [{
                    text: 'Play as Hamilton',
                    setState: { hamilton: true },
                    nextText: 2
                },
                {
                    text: 'Play as Annie',
                    setState: { annie: true },
                    nextText: 2.1
                }
            ]
        },

        {
            id: 2,
            vidtime: 1000,
            vid: 'video/earth.mp4', // god-less
            text: 'Looks like Sam is going to be Hamilton. What hat should he wear?',
            options: [{

                    text: 'A baseball cap?',
                    setState: { baseballCap: true },
                    nextText: 4.01
                },
                {
                    text: 'A Cowboy hat?',
                    setState: { cowboyHat: true },
                    nextText: 4.001
                },
                // {
                //     text: 'A Tophat?',
                //     setState: { topHat: true },
                //     nextText: 4
                // }
            ]
        },
        {
            id: 2.1,
            vidtime: 1000,
            vid: 'f9-J6A0mt14', // 2 much 2
            text: 'Looks like Sam is going to be Annie. What hat should she wear?',
            options: [{
                    text: 'A baseball cap?',
                    setState: { baseballCap: true },
                    nextText: 4.019
                },
                {
                    text: 'A Cowboy hat?',
                    setState: { cowboyHat: true },
                    nextText: 4.0019
                },
                // {
                //     text: 'A Tophat?',
                //     setState: { topHat: true },
                //     nextText: 4.1
                // }
            ]
        },
        {
            id: 4.01,
            text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
            vidtime: 1000,
            vid: 'LB_M44NCwUY',
            options: [{
                    text: 'A Fadora?',
                    setState: { fadora: true },
                    nextText: 4.02
                },
                {
                    text: 'A Headband?',
                    setState: { headband: true },
                    nextText: 4.03
                },
                // {
                //     text: 'Or Eyeshadow',
                //     setSate: { eyeshadow: true },
                //     nextText: 5
                // }
            ]
        },
        {
            id: 4.001,
            text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
            options: [{
                    text: 'A Fadora?',
                    setState: { fadora: true },
                    nextText: 4.002
                },
                {
                    text: 'A Headband?',
                    setState: { headband: true },
                    nextText: 4.003
                },
                // {
                //     text: 'Or Eyeshadow',
                //     setSate: { eyeshadow: true },
                //     nextText: 5
                // }
            ]
        },
        // Boy
        {
            id: 4.02,
            text: 'Choose your starting location. Hamilton',
            options: [{
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.021
                },
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.022
                }
            ]
        },
        {
            id: 4.03,
            text: 'Choose your starting location. Hamilton',
            options: [{
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.031
                },
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.032
                }
            ]
        },
        {
            id: 4.002,
            text: 'Choose your starting location. Hamilton',
            options: [{
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.0021
                },
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.0022
                }
            ]
        },
        {
            id: 4.003,
            text: 'Choose your starting location. Hamilton',
            options: [{
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.0031
                },
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.0032
                }
            ]
        },
        // Boy baseball hat
        {
            id: 4.021,
            text: 'Mount Doom Scene Hamilton',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        {
            id: 4.031,
            text: 'Mount Doom Scene Hamilton',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        {
            id: 4.022,
            text: 'Ghost Town Scene Hamilton',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        {
            id: 4.032,
            text: 'Ghost Town Scene Hamilton',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        // Boy Cowboy hat
        {
            id: 4.0021,
            text: 'Mount Doom Scene Hamilton',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        {
            id: 4.0022,
            text: 'Mount Doom Scene Hamilton',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        {
            id: 4.0031,
            text: 'Ghost Town Scene Hamilton',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        {
            id: 4.0032,
            text: 'Ghost Town Scene Hamilton',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        {
            id: 4.019,
            text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
            options: [{
                    text: 'A Fadora?',
                    setState: { fadora: true },
                    nextText: 4.029
                },
                {
                    text: 'A Headband?',
                    setState: { headband: true },
                    nextText: 4.039
                },
                // {
                //     text: 'Or Eyeshadow',
                //     setSate: { eyeshadow: true },
                //     nextText: 5
                // }
            ]
        },
        {
            id: 4.0019,
            text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
            options: [{
                    text: 'A Fadora?',
                    setState: { fadora: true },
                    nextText: 4.0029
                },
                {
                    text: 'A Headband?',
                    setState: { headband: true },
                    nextText: 4.0039
                },
                // {
                //     text: 'Or Eyeshadow',
                //     setSate: { eyeshadow: true },
                //     nextText: 5
                // }
            ]
        },
        // Boy
        {
            id: 4.029,
            text: 'Choose your starting location. Annie',
            options: [{
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.0219
                },
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.0229
                }
            ]
        },
        {
            id: 4.039,
            text: 'Choose your starting location. Annie',
            options: [{
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.0319
                },
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.0329
                }
            ]
        },
        {
            id: 4.0029,
            text: 'Choose your starting location. Annie',
            options: [{
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.00219
                },
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.00229
                }
            ]
        },
        {
            id: 4.0039,
            text: 'Choose your starting location. Annie',
            options: [{
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.00319
                },
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.00329
                }
            ]
        },
        {
            id: 4.0219,
            text: 'Mount Doom Scene Annie',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 4.0319,
            text: 'Mount Doom Scene Annie',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 4.0229,
            text: 'Ghost Town Scene Annie',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 4.0329,
            text: 'Ghost Town Scene Annie',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        // Boy Cowboy hat
        {
            id: 4.00219,
            text: 'Mount Doom Scene Annie',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 4.00229,
            text: 'Mount Doom Scene Annie',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 4.00319,
            text: 'Ghost Town Scene Annie',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 4.00329,
            text: 'Ghost Town Scene Annie',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 8,
            text: 'Battlefield scene. Choose Between the shark or the wolf Hamilton',
            options: [{
                    text: 'Shark',
                    setState: { shark: true },
                    nextText: 9
                },
                {
                    text: 'Wolf',
                    setState: { wolf: true },
                    nextText: 10
                }
            ]
        },
        // Girl
        {
            id: 8.1,
            text: 'Battlefield scene. Choose Between the shark or the wolf,Annie',
            options: [{
                    text: 'Shark',
                    setState: { shark: true },
                    nextText: 9.1
                },
                {
                    text: 'Wolf',
                    setState: { wolf: true },
                    nextText: 10.1
                }
            ]
        },
        // Boy
        {
            id: 9,
            text: 'You chose to fight the shark.Hamilton',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        // Girl
        {
            id: 9.1,
            text: 'You chose to fight the shark.Annie',
            options: [{
                text: 'Continue',
                nextText: 11.1
            }]
        },
        // Boy
        {
            id: 10,
            text: 'You chose to fight the wolf.Hamilton',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        // Girl
        {
            id: 10.1,
            text: 'You chose to fight the wolf.Annie',
            options: [{
                text: 'Continue',
                nextText: 11.1
            }]
        },
        // Boy
        {
            id: 11,
            text: 'Vampire Bat Scene as Hamilton',
            options: [{
                    text: 'Why does Sam have anxiety Hamilton?',
                    nextText: 12
                },
                {
                    text: 'How can Sam overcome his anxiety Hamilton?',
                    nextText: 13.1
                },
                {
                    text: 'Why is a raven like a writing desk Hamilton?',
                    nextText: 14
                },
                {
                    text: 'Skip dialouge and proceed to fight the bats Hamilton',
                    nextText: 15
                },
            ]
        },
        // Girl
        {
            id: 11.1,
            text: 'Vampire Bat Scene as Annie',
            options: [{
                    text: 'Why does Sam have anxiety? Annie',
                    nextText: 12.2
                },
                {
                    text: 'How can Sam overcome his anxiety? Annie',
                    nextText: 13.2
                },
                {
                    text: 'Why is a raven like a writing desk? Annie',
                    nextText: 14.1
                },
                {
                    text: 'Skip dialouge and proceed to fight the bats Annie',
                    nextText: 15.1
                },
            ]
        },
        // Boy
        {
            id: 12,
            text: 'Explanation of question 1 and options to ask more Hamilton',
            setState: { question1: true },
            options: [{
                    text: 'How can Sam overcome his anxiety? Hamilton',
                    setState: { question2: true },
                    nextText: 13
                },
                {
                    text: 'Why is a raven like a writing desk? Hamilton',
                    nextText: 14
                },
                {
                    text: 'Skip dialouge and proceed to fight the bats Hamilton',
                    nextText: 15
                },
            ]
        },
        // Boy
        {
            id: 12.1,
            text: 'Explanation of question 1 and options to ask more Hamilton',
            setState: { question1: true },
            options: [{
                text: 'Continue',
                setState: { question2: true },
                nextText: 16
            }, ]
        },
        // Girl
        {
            id: 12.2,
            text: 'Explanation of question 1 and options to ask more Annie',
            setState: { question1: true },
            options: [{
                    text: 'How can Sam overcome his anxiety? Annie',
                    setState: { question2: true },
                    nextText: 13.2
                },
                {
                    text: 'Why is a raven like a writing desk? Annie',
                    nextText: 14.1
                },
                {
                    text: 'Skip dialouge and proceed to fight the bats Annie',
                    nextText: 15.1
                },
            ]
        },
        // Boy
        {
            id: 13,
            text: 'Explanation of question 2 and option to ask more',
            options: [{
                text: 'Continue',
                nextText: 16
            }]
        },
        // Boy
        {
            id: 13.1,
            text: 'Explanation of question 2, No option to repeat Hamilton',
            options: [{
                text: 'Why does Sam have anxiety?',
                nextText: 12.1
            }, ]
        },
        // Girl
        {
            id: 13.2,
            text: 'Explanation of question 2 and option to ask more Annie',
            options: [{
                text: 'Continue',
                nextText: 16.1
            }]
        },
        // Boy
        {
            id: 14,
            text: 'Question 3 tells the player to not as silly questions and focus on the task at hand Hamilton',
            options: [{
                    text: 'Why does Sam have anxiety?Hamilton',

                    nextText: 12
                },
                {
                    text: 'Why does Sam have anxiety?Hamilton',

                    nextText: 12
                },
                {
                    text: 'Skip dialouge and proceed to fight the bats Hamilton',
                    nextText: 15
                },
                {
                    text: 'Why is a raven like a writing desk? Hamilton',
                    nextText: 18
                },
            ]
        },
        // Girl
        {
            id: 14.1,
            text: 'Question 3 tells the player to not as silly questions and focus on the task at hand Annie',
            options: [{
                    text: 'Why does Sam have anxiety? Annie',

                    nextText: 12.2
                },
                {
                    text: 'Why does Sam have anxiety? Annie',

                    nextText: 12.2
                },
                {
                    text: 'Skip dialouge and proceed to fight the bats Annie',
                    nextText: 15.1
                },
                {
                    text: 'Why is a raven like a writing desk? Annie',
                    nextText: 18.1
                },
            ]
        },
        // Boy
        {
            id: 18,
            text: 'Asking Question 3 twice Results in this form of a game over Hamilton',
            options: [{
                    text: 'Try Again',
                    nextText: 11
                }

            ]
        },
        // Girl
        {
            id: 18.1,
            text: 'Asking Question 3 twice Results in this form of a game over Annie',
            options: [{
                    text: 'Try Again',
                    nextText: 11
                }

            ]
        },
        // Boy
        {
            id: 15,
            text: 'This option is reckless and results in a game over restarting the scinario Hamilton',
            options: [{
                    text: 'Try Again',
                    nextText: 11
                }

            ]
        },
        // Girl
        {
            id: 15.1,
            text: 'This option is reckless and results in a game over restarting the scinario Annie',
            options: [{
                    text: 'Try Again',
                    nextText: 11.1
                }

            ]
        },
        // Boy
        {
            id: 16,
            text: 'Sam defeats the bats and learns a valuable lesson about his anxiety Hamilton',
            options: [{
                    text: 'Continue',
                    nextText: 17
                }

            ]
        },
        // Girl
        {
            id: 16.1,
            text: 'Sam defeats the bats and learns a valuable lesson about his anxiety Annie',
            options: [{
                    text: 'Continue',
                    nextText: 17.1
                }

            ]
        },
        // Boy
        {
            id: 17,
            text: 'Zombie Apocalypse Scene, no Choices Hamilton',
            options: [{
                text: 'Continue',
                nextText: 19
            }]
        },
        // Girl
        {
            id: 17.1,
            text: 'Zombie Apocalypse Scene, no Choices Annie',
            options: [{
                text: 'Continue',
                nextText: 19.1
            }]
        },
        // Boy
        {
            id: 19,
            text: 'Level Up Scene. Player gains 50xp and a copper mind shield as well as the ability to pick one of three items Hamilton',
            options: [{
                    text: 'Bubble Machine Hamilton',
                    setState: { bubbleMachine: true, experiancePoints: true, copperMindShield: true },
                    nextText: 20
                },
                {
                    text: 'Band of Pacification Hamilton',
                    setState: { bandOfPacification: true, experiancePoints: true, copperMindShield: true },
                    nextText: 20
                },
                {
                    text: 'Stuffed Hedgehog Hamilton',
                    setState: { stuffedHedgeHog: true, experiancePoints: true, copperMindShield: true },
                    nextText: 20
                }
            ]
        },
        // Girl
        {
            id: 19.1,
            text: 'Level Up Scene. Player gains 50xp and a copper mind shield as well as the ability to pick one of three items Annie',
            options: [{
                    text: 'Bubble Machine Annie',
                    setState: { bubbleMachine: true, experiancePoints: true, copperMindShield: true },
                    nextText: 20.1
                },
                {
                    text: 'Band of Pacification Annie',
                    setState: { bandOfPacification: true, experiancePoints: true, copperMindShield: true },
                    nextText: 20.1
                },
                {
                    text: 'Stuffed Hedgehog Annie',
                    setState: { stuffedHedgeHog: true, experiancePoints: true, copperMindShield: true },
                    nextText: 20.1
                }
            ]
        },
        // Boys Final Out Comes
        {
            id: 20,
            text: 'Final Scene. Depending on which path the player originally chose they will either focus on a memory of being at Mount Doom or the Ghost Town Boy',
            options: [{
                text: 'Continue',
                nextText: 21
            }]
        },
        {
            id: 21.1,
            text: 'Focuses on HEDGEHOG Memory of MT Doom Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 21.2,
            text: 'Focuses on BAND OF PACIFICATION Memory of MT Doom Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 21.3,
            text: 'Focuses on BUBBLE MACHINE Memory of MT Doom Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 22.1,
            text: 'Focuses on HEDGEHOG Memory of Ghost Town Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 22.2,
            text: 'Focuses on BAND OF PACIFICATION Memory of Ghost Town Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 22.3,
            text: 'Focuses on BUBBLE MACHINE Memory of Ghost Town Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 23,
            text: 'END OF GAME Hamilton',
            options: [{
                text: 'RESTART GAME',
                nextText: -1
            }]
        },


        // Girls Final Out Comes
        {
            id: 20.1,
            text: 'Final Scene. Depending on which path the player originally chose they will either focus on a memory of being at Mount Doom or the Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 21.12
            }]
        },
        {
            id: 21.12,
            text: 'Focuses on HEDGEHOG Memory of MT Doom Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 21.22,
            text: 'Focuses on BAND OF PACIFICATION Memory of MT Doom Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 21.31,
            text: 'Focuses on BUBBLE MACHINE Memory of MT Doom Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 22.11,
            text: 'Focuses on HEDGEHOG Memory of Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 22.21,
            text: 'Focuses on BAND OF PACIFICATION Memory of Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 22.31,
            text: 'Focuses on BUBBLE MACHINE Memory of Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 23.1,
            text: 'END OF GAME as Annie',
            options: [{
                text: 'RESTART GAME',
                nextText: -1
            }]
        },








    ]
const videoElement = document.getElementById('video');
const textElement = document.getElementById('text');
const optionButtonsElement = document.getElementById('option-buttons');
var vidNode = 1;
var vidTime = 1000;
// var Video = 'MIAttlFcO6g';
// var tag = document.createElement('script');
// var firstScriptTag = document.getElementsByTagName('script')[0];

var done = false;
// tag.src = "https://www.youtube.com/iframe_api";

// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var theNode;

function loadVideo(nextNodeId) {
    theNode = nextNodeId;
    // var iframe = document.getElementById("player");
    // iframe.remove();
    // var el = document.createElement("div");
    // el.setAttribute("id", "player", );
    // el.innerHTML = "hi";
    // var div = document.getElementById("vid_box");
    // div.append(el);
    done = false;
    document.getElementById('video').style.display='block';
    document.getElementById('text').style.display = 'none';
    document.getElementById('option-buttons').style.display = 'none';
    vidTime = vidNode.vidtime;
    Video = vidNode.vid;
    // onYouTubeIframeAPIReady();
}





// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
// var player;

// function onYouTubeIframeAPIReady() {
    
//     player = new YT.Player('player', {
//         height: '390',
//         width: '640',
//         videoId: Video,
//         playerVars:{
//             'autoplay': 0,
//             'controls': 0,
//             'modestbranding': 1,
//             'rel': 0,
//             'showinfo': 0,
        

//         },
//         events: {
//             'onReady': onPlayerReady,
//             'onStateChange': onPlayerStateChange
//         },
//     });
// }

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    //console.log('hello');
    //   event.target.playVideo();
}

var myVar;

// If Video is Playing
videoElement.onplay = function()
{
    // alert("Video Is Playing")
    
}
// If Video is Stopped
videoElement.onended = function()
{
    clearTimeout(myVar);
    setTimeout(vidTime);
    if (theNode == undefined)
        theNode = 1;
    showTextNode(theNode);
    done = true;
    if (done == true) 
    {
        $(function(){
            $('.moveUpText').delay(1000).show("slide", {direction: "down" }, "slow")
            $('.moveUpBtn').delay(1000).show("slide", {direction: "up" }, "slow");
        });
    }
        
}

function onPlayerStateChange(event) {
    //console.log(event.data);
    //console.log(done);
   
    if (event.data == YT.PlayerState.PLAYING && !done) {

        myVar = setTimeout(stopVideo, vidTime);
        

        done = true;
    }
}

function stopVideo() {
    
    clearTimeout(myVar);
    vidNode.stopVideo();
    // document.getElementById('text').style.display = 'block';
    // document.getElementById('option-buttons').style.display = 'block';
    if (theNode == undefined)
        theNode = 1;
    showTextNode(theNode);
    if (done == true) {
        $(function(){
            $('.moveUpText').delay(1000).show("slide", {direction: "down" }, "slow")
            $('.moveUpBtn').delay(1000).show("slide", {direction: "up" }, "slow");
            });
    }
}



const playing = true;




let state = {}


function startGame() {
    state = {}
    showVid(1);
}



function showVid(textNodeIndex) {
    vidNode = textNodes.find(vidNode => vidNode.id === textNodeIndex)
    var video =  document.getElementsByTagName('video')[0];
    console.log(video);
    var sources = video.getElementsByTagName('source');
    sources[0].src = vidNode.vid;
    video.load();


    
}

function showTextNode(textNodeIndex) {
    vidNode = textNodes.find(vidNode => vidNode.id === textNodeIndex)
    const textNode = textNodes.find(textNode => textNode.id === textNodeIndex)
    textElement.innerText = textNode.text
    while (optionButtonsElement.firstChild) {
        optionButtonsElement.removeChild(optionButtonsElement.firstChild)
    }

    textNode.options.forEach(option => {
            if (showOption(option)) {
                const button = document.createElement('button')
                button.innerText = option.text
                button.classList.add('btn')
                button.addEventListener('click', () => selectOption(option))
                optionButtonsElement.appendChild(button)
            }
        }) 
}


function showOption(option) {
    return option.requiredState == null || option.requiredState(state)
    
    
}
// ALL LOGICAL STATMENTS
function selectOption(option) {

    var nextTextNodeId = option.nextText
        // this is the line I added to get the next vidNode based on the option that 
        // was chosen. I don't know if I created a new problem by doing so.
    vidNode = textNodes.find(vidNode => vidNode.id === nextTextNodeId)
        // Restarts Game
    if (nextTextNodeId <= 0) {
        startGame();
        // loadVideo(1);

    }
    state = Object.assign(state, option.setState)

    if (nextTextNodeId == 20 && state.mountDoomn == true && state.stuffedHedgeHog == true && state.hamilton == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.1;
    } else if (nextTextNodeId == 20 && state.mountDoomn == true && state.bandOfPacification == true && state.hamilton == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.2;
    } else if (nextTextNodeId == 20 && state.mountDoomn == true && state.bubbleMachine == true && state.hamilton == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.3;
    } else if (nextTextNodeId == 20 && state.ghostTown == true && state.stuffedHedgeHog == true && state.hamilton == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.1;
    } else if (nextTextNodeId == 20 && state.ghostTown == true && state.bandOfPacification == true && state.hamilton == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.2;
    } else if (nextTextNodeId == 20 && state.ghostTown == true && state.bubbleMachine == true && state.hamilton == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.3;
    }
    if (nextTextNodeId == 20.1 && state.mountDoomn == true && state.stuffedHedgeHog == true && state.annie == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.12;
    } else if (nextTextNodeId == 20.1 && state.mountDoomn == true && state.bandOfPacification == true && state.annie == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.22;
    } else if (nextTextNodeId == 20.1 && state.mountDoomn == true && state.bubbleMachine == true && state.annie == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.31;
    } else if (nextTextNodeId == 20.1 && state.ghostTown == true && state.stuffedHedgeHog == true && state.annie == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.11;
    } else if (nextTextNodeId == 20.1 && state.ghostTown == true && state.bandOfPacification == true && state.annie == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.21;
    } else if (nextTextNodeId == 20.1 && state.ghostTown == true && state.bubbleMachine == true && state.annie == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.31;
    } else if (nextTextNodeId == 7.1 && state.cowboyHat == true && state.annie == true) {
        nextTextNodeId = 7.2;
    } else if (nextTextNodeId == 7 && state.cowboyHat == true && state.hamilton == true) {
        nextTextNodeId = 7.3;
    }
    showVid(nextTextNodeId);
}
startGame();