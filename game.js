
const videoElement = document.getElementById('video');
const textElement = document.getElementById('text');
const optionButtonsElement = document.getElementById('option-buttons');

let state = {}


function startGame() {
    state = {}
    showTextNode(1)

}


function showTextNode(textNodeIndex) {
    const vidNode = textNodes.find(vidNode => vidNode.id === textNodeIndex)
    videoElement.src = vidNode.vid
    const textNode = textNodes.find(textNode => textNode.id === textNodeIndex)
    textElement.innerText = textNode.text
    while (optionButtonsElement.firstChild) {
        optionButtonsElement.removeChild(optionButtonsElement.firstChild)
    }

    textNode.options.forEach(option => {
            if (showOption(option)) {
                const button = document.createElement('button')
                const vid = document.createElement('iframe')
                vid.innerHTML = option.vid
                button.innerText = option.text
                button.classList.add('btn')
                button.addEventListener('click', () => selectOption(option))
                optionButtonsElement.appendChild(button)
            }
        })
        //This is storing the choices being made in the console. these some of these choices will effect final outcome of game. 
}


function showOption(option) {
    return option.requiredState == null || option.requiredState(state)
}
// ALL LOGICAL STATMENTS
function selectOption(option) {
    
    var nextTextNodeId = option.nextText
    if (nextTextNodeId <= 0) {
        startGame();
    }
    state = Object.assign(state, option.setState)

    if (nextTextNodeId == 20 && state.mountDoomn == true && state.stuffedHedgeHog == true && state.boy == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.1;
    } 
    else if (nextTextNodeId == 20 && state.mountDoomn == true && state.bandOfPacification == true && state.boy == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.2;
    }
    else if (nextTextNodeId == 20 && state.mountDoomn == true && state.bubbleMachine == true && state.boy == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.3;
    }
    else if (nextTextNodeId == 20 && state.ghostTown == true && state.stuffedHedgeHog == true && state.boy == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.1;
    }
    else if (nextTextNodeId == 20 && state.ghostTown == true && state.bandOfPacification == true && state.boy == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.2;
    }
    else if (nextTextNodeId == 20 && state.ghostTown == true && state.bubbleMachine == true && state.boy == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.3;
    }

    if (nextTextNodeId == 20.1 && state.mountDoomn == true && state.stuffedHedgeHog == true && state.girl == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.12;
    } 
    else if (nextTextNodeId == 20.1 && state.mountDoomn == true && state.bandOfPacification == true && state.girl == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.22;
    }
    else if (nextTextNodeId == 20.1 && state.mountDoomn == true && state.bubbleMachine == true && state.girl == true) {
        console.log('Mount Doom');
        nextTextNodeId = 21.31;
    }
    else if (nextTextNodeId == 20.1 && state.ghostTown == true && state.stuffedHedgeHog == true && state.girl == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.11;
    }
    else if (nextTextNodeId == 20.1 && state.ghostTown == true && state.bandOfPacification == true && state.girl == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.21;
    }
    else if (nextTextNodeId == 20.1 && state.ghostTown == true && state.bubbleMachine == true && state.girl == true) {

        console.log('Ghost Town');
        nextTextNodeId = 22.31;
    }


    else if (nextTextNodeId == 7.1 && state.cowboyHat == true && state.girl == true){
        nextTextNodeId = 7.2;
    }
    else if (nextTextNodeId == 7 && state.cowboyHat == true && state.boy == true){
        nextTextNodeId = 7.3;
    }
    
    showTextNode(nextTextNodeId)

}
{/* <iframe width="560" height="315" src="https://www.youtube.com/embed/9YffrCViTVk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> */}
// Whole numbers will indicate that the player is taking rout 1 while a decimal will indicate that the player has taken rout 2
// Genders will be changed to appropriate names as soon as I find out what thoes names are.
const textNodes = [{
        id: 1,
        vid: 'https://www.youtube.com/embed/9YffrCViTVk',
        text: 'Choose if Sam is a GIRL or Boy',
        options: [{
                text: 'Play as a Boy',
                setState: { boy: true },
                nextText: 2
            },
            {
                text: 'Play as a Girl',
                setState: { girl: true },
                nextText: 2.1
            }
        ]
    },
    
    {
        id: 2,
        text: 'Looks like Sam is a BOY. What hat should he wear?',
        options: [{
                text: 'A baseball cap?',
                setState: { baseballCap: true },
                nextText: 4
            },
            {
                text: 'A Cowboy hat?',
                setState: { cowboyHat: true },
                nextText: 4
            },
            {
                text: 'A Tophat?',
                setState: { topHat: true },
                nextText: 4
            }
        ]
    },
    {
        id: 2.1,
        text: 'Looks like Sam is a Girl. What hat should she wear?',
        options: [{
                text: 'A baseball cap?',
                setState: { baseballCap: true },
                nextText: 4.1
            },
            {
                text: 'A Cowboy hat?',
                setState: { cowboyHat: true },
                nextText: 4.1
            },
            {
                text: 'A Tophat?',
                setState: { topHat: true },
                nextText: 4.1
            }
        ]
    },
    {
        id: 4,
        text: 'Now That we know what our Gender is lets choose an accessory for our friend Pig.',
        options: [{
                text: 'A Fadora?',
                setState: { fadora: true },
                nextText: 5
            },
            {
                text: 'A Headband?',
                setState: { headband: true },
                nextText: 5
            },
            {
                text: 'Or Eyeshadow',
                setSate: { eyeshadow: true },
                nextText: 5
            }
        ]
    },
   
    {
        id: 4.1,
        text: 'Now That we know what our Gender, a girl lets choose an accessory for our friend Pig.',
        options: [{
                text: 'A Fadora?',
                setState: { fadora: true },
                nextText: 5.1
            },
            {
                text: 'A Headband?',
                setState: { headband: true },
                nextText: 5.1
            },
            {
                text: 'Or Eyeshadow',
                setSate: { eyeshadow: true },
                nextText: 5.1
            }
        ]
    },
// Boy
    {
        id: 5,
        text: 'Choose your starting location.Boy',
        options: [{
                text: 'Mount Doom',
                setState: { mountDoomn: true },
                nextText: 6
            },
            {
                text: 'Ghost Town',
                setState: { ghostTown: true },
                nextText: 7
            }
        ]
    },
// Girl
    {
        id: 5.1,
        text: 'Choose your starting location girl.',
        options: [{
                text: 'Mount Doom',
                setState: { mountDoomn: true },
                nextText: 6.1
            },
            {
                text: 'Ghost Town',
                setState: { ghostTown: true },
                nextText: 7.1
            }
        ]
    },
// Boy
    {
        id: 6,
        text: 'Mount Doom Scene Boy',
        options: [{
            text: 'Continue',
            nextText: 8
        }]
    },
// Girl
    {
        id: 6.1,
        text: 'Mount Doom Scene, girl',
        options: [{
            text: 'Continue',
            nextText: 8.1
        }]
    },
// Boy
    {
        id: 7,
        text: 'Ghost Town scene Boy',
        options: [{
            text: 'Continue',
            nextText: 8
        }]
    },
// Girl
    {
        id: 7.1,
        text: 'Ghost Town scene, girl',
        options: [{
            text: 'Continue',
            nextText: 8
        }]
    },
// Girl
    {
        id: 7.2,
        text: 'Ghost Town scene were pig complements you on choosing COWBOYHAT, Girl',
        options: [{
            text: 'Continue',
            nextText: 8.1
        }]
    },
// Boy
    {
        id: 7.3,
        text: 'Ghost Town scene were pig complements you on choosing COWBOYHAT, Boy',
        options: [{
            text: 'Continue',
            nextText: 8
        }]
    },
// Boy
    {
        id: 8,
        text: 'Battlefield scene. Choose Between the shark or the wolf Boy',
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
        text: 'Battlefield scene. Choose Between the shark or the wolf,Girl',
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
        text: 'You chose to fight the shark.Boy',
        options: [{
            text: 'Continue',
            nextText: 11
        }]
    },
// Girl
    {
        id: 9.1,
        text: 'You chose to fight the shark.Girl',
        options: [{
            text: 'Continue',
            nextText: 11.1
        }]
    },
// Boy
    {
        id: 10,
        text: 'You chose to fight the wolf.Boy',
        options: [{
            text: 'Continue',
            nextText: 11
        }]
    },
// Girl
    {
        id: 10.1,
        text: 'You chose to fight the wolf.Girl',
        options: [{
            text: 'Continue',
            nextText: 11.1
        }]
    },
// Boy
    {
        id: 11,
        text: 'Vampire Bat Scene as Boy',
        options: [{
                text: 'Why does Sam have anxiety Boy?',
                nextText: 12
            },
            {
                text: 'How can Sam overcome his anxiety Boy?',
                nextText: 13.1
            },
            {
                text: 'Why is a raven like a writing desk Boy?',
                nextText: 14
            },
            {
                text: 'Skip dialouge and proceed to fight the bats Boy',
                nextText: 15
            },
        ]
    },
// Girl
    {
        id: 11.1,
        text: 'Vampire Bat Scene as Girl',
        options: [{
                text: 'Why does Sam have anxiety? Girl',
                nextText: 12.2
            },
            {
                text: 'How can Sam overcome his anxiety? Girl',
                nextText: 13.2
            },
            {
                text: 'Why is a raven like a writing desk? Girl',
                nextText: 14.1
            },
            {
                text: 'Skip dialouge and proceed to fight the bats Girl',
                nextText: 15.1
            },
        ]
    },
// Boy
    {
        id: 12,
        text: 'Explanation of question 1 and options to ask more Boy',
        setState:{question1: true},
        options: [{
                text: 'How can Sam overcome his anxiety? Boy',
                setState: {question2: true},
                nextText: 13
            },
            {
                text: 'Why is a raven like a writing desk? Boy',
                nextText: 14
            },
            {
                text: 'Skip dialouge and proceed to fight the bats Boy',
                nextText: 15
            },
        ]
    },
// Boy
    {
        id: 12.1,
        text: 'Explanation of question 1 and options to ask more Boy',
        setState:{question1: true},
        options: [{
                text: 'Continue',
                setState: {question2: true},
                nextText: 16
            },
        ]
    },
// Girl
    {
        id: 12.2,
        text: 'Explanation of question 1 and options to ask more girl',
        setState:{question1: true},
        options: [{
                text: 'How can Sam overcome his anxiety? Girl',
                setState: {question2: true},
                nextText: 13.2
            },
            {
                text: 'Why is a raven like a writing desk? Girl',
                nextText: 14.1
            },
            {
                text: 'Skip dialouge and proceed to fight the bats Girl',
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
        }
        ]
    },
// Boy
    {
        id: 13.1,
        text: 'Explanation of question 2, No option to repeat Boy',
        options: [{
            text: 'Why does Sam have anxiety?',
            nextText: 12.1
        },
        ]
    },
// Girl
    {
        id: 13.2,
        text: 'Explanation of question 2 and option to ask more girl',
        options: [{
            text: 'Continue',
            nextText: 16.1
        }
        ]
    },
// Boy
    {
        id: 14,
        text: 'Question 3 tells the player to not as silly questions and focus on the task at handBoy',
        options: [{
                text: 'Why does Sam have anxiety?Boy',

                nextText: 12
            },
            {
                text: 'Why does Sam have anxiety?Boy',

                nextText: 12
            },
            {
                text: 'Skip dialouge and proceed to fight the batsBoy',
                nextText: 15
            },
            {
                text: 'Why is a raven like a writing desk?Boy',
                nextText: 18
            },
        ]
    },
// Girl
    {
        id: 14.1,
        text: 'Question 3 tells the player to not as silly questions and focus on the task at hand Girl',
        options: [{
                text: 'Why does Sam have anxiety? Girl',

                nextText: 12.2
            },
            {
                text: 'Why does Sam have anxiety? Girl',

                nextText: 12.2
            },
            {
                text: 'Skip dialouge and proceed to fight the bats Girl',
                nextText: 15.1
            },
            {
                text: 'Why is a raven like a writing desk? Girl',
                nextText: 18.1
            },
        ]
    },
// Boy
    {
        id: 18,
        text: 'Asking Question 3 twice Results in this form of a game over Boy',
        options: [{
                text: 'Try Again',
                nextText: 11
            }

        ]
    },
// Girl
    {
        id: 18.1,
        text: 'Asking Question 3 twice Results in this form of a game over girl',
        options: [{
                text: 'Try Again',
                nextText: 11
            }

        ]
    },
// Boy
    {
        id: 15,
        text: 'This option is reckless and results in a game over restarting the scinario Boy',
        options: [{
                text: 'Try Again',
                nextText: 11
            }

        ]
    },
// Girl
    {
        id: 15.1,
        text: 'This option is reckless and results in a game over restarting the scinario girl',
        options: [{
                text: 'Try Again',
                nextText: 11.1
            }

        ]
    },
// Boy
    {
        id: 16,
        text: 'Sam defeats the bats and learns a valuable lesson about his anxiety Boy',
        options: [{
                text: 'Continue',
                nextText: 17
            }

        ]
    },
// Girl
    {
        id: 16.1,
        text: 'Sam defeats the bats and learns a valuable lesson about his anxiety girl',
        options: [{
                text: 'Continue',
                nextText: 17.1
            }

        ]
    },
// Boy
    {
        id: 17,
        text: 'Zombie Apocalypse Scene, no Choices Boy',
        options: [{
            text: 'Continue',
            nextText: 19
        }]
    },
// Girl
    {
        id: 17.1,
        text: 'Zombie Apocalypse Scene, no Choices girl',
        options: [{
            text: 'Continue',
            nextText: 19.1
        }]
    },
// Boy
    {
        id: 19,
        text: 'Level Up Scene. Player gains 50xp and a copper mind shield as well as the ability to pick one of three items Boy',
        options: [{
                text: 'Bubble Machine Boy',
                setState: { bubbleMachine: true, experiancePoints: true, copperMindShield: true },
                nextText: 20
            },
            {
                text: 'Band of Pacification Boy',
                setState: { bandOfPacification: true, experiancePoints: true, copperMindShield: true },
                nextText: 20
            },
            {
                text: 'Stuffed Hedgehog Boy',
                setState: { stuffedHedgeHog: true, experiancePoints: true, copperMindShield: true },
                nextText: 20
            }
        ]
    },
// Girl
    {
        id: 19.1,
        text: 'Level Up Scene. Player gains 50xp and a copper mind shield as well as the ability to pick one of three items girl',
        options: [{
                text: 'Bubble Machine girl',
                setState: { bubbleMachine: true, experiancePoints: true, copperMindShield: true },
                nextText: 20.1
            },
            {
                text: 'Band of Pacification girl',
                setState: { bandOfPacification: true, experiancePoints: true, copperMindShield: true },
                nextText: 20.1
            },
            {
                text: 'Stuffed Hedgehog girl',
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
        text: 'Focuses on HEDGEHOG Memory of MT Doom Boy',
        options: [{
            text: 'Continue',
            nextText: 23
        }]
    },
    {
        id: 21.2,
        text: 'Focuses on BAND OF PACIFICATION Memory of MT Doom Boy',
        options: [{
            text: 'Continue',
            nextText: 23
        }]
    },
    {
        id: 21.3,
        text: 'Focuses on BUBBLE MACHINE Memory of MT Doom Boy',
        options: [{
            text: 'Continue',
            nextText: 23
        }]
    },
    {
        id: 22.1,
        text: 'Focuses on HEDGEHOG Memory of Ghost Town Boy',
        options: [{
            text: 'Continue',
            nextText: 23
        }]
    },
    {
        id: 22.2,
        text: 'Focuses on BAND OF PACIFICATION Memory of Ghost Town Boy',
        options: [{
            text: 'Continue',
            nextText: 23
        }]
    },
    {
        id: 22.3,
        text: 'Focuses on BUBBLE MACHINE Memory of Ghost Town Boy',
        options: [{
            text: 'Continue',
            nextText: 23
        }]
    },
    {
        id: 23,
        text: 'END OF GAME Boy',
        options: [{
            text: 'RESTART GAME',
            nextText: -1
        }]
    },


// Girls Final Out Comes
    {
        id: 20.1,
        text: 'Final Scene. Depending on which path the player originally chose they will either focus on a memory of being at Mount Doom or the Ghost Town Girl',
        options: [{
            text: 'Continue',
            nextText: 21.12
        }]
    },
    {
        id: 21.12,
        text: 'Focuses on HEDGEHOG Memory of MT Doom Girl',
        options: [{
            text: 'Continue',
            nextText: 23.1
        }]
    },
    {
        id: 21.22,
        text: 'Focuses on BAND OF PACIFICATION Memory of MT Doom Girl',
        options: [{
            text: 'Continue',
            nextText: 23.1
        }]
    },
    {
        id: 21.31,
        text: 'Focuses on BUBBLE MACHINE Memory of MT Doom Girl',
        options: [{
            text: 'Continue',
            nextText: 23.1
        }]
    },
    {
        id: 22.11,
        text: 'Focuses on HEDGEHOG Memory of Ghost Town Girl',
        options: [{
            text: 'Continue',
            nextText: 23.1
        }]
    },
    {
        id: 22.21,
        text: 'Focuses on BAND OF PACIFICATION Memory of Ghost Town Girl',
        options: [{
            text: 'Continue',
            nextText: 23.1
        }]
    },
    {
        id: 22.31,
        text: 'Focuses on BUBBLE MACHINE Memory of Ghost Town Girl',
        options: [{
            text: 'Continue',
            nextText: 23.1
        }]
    },
    {
        id: 23.1,
        text: 'END OF GAME as girl',
        options: [{
            text: 'RESTART GAME',
            nextText: -1
        }]
    },








]

startGame();