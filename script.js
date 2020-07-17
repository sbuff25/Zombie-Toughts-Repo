const textElement = document.getElementById('text');
const optionButtonsElement = document.getElementById('option-buttons');

let state = {}

const cowboyHat = false;

function startGame(){
    state = {}
    showTextNode(1)
    
}
function showTextNode(textNodeIndex){
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
    //This is storing the choices being made in the console. these some of these choices will effect final outcome of game. 
    console.log(state);
}

function showOption(option) {
    return option.requiredState == null || option.requiredState(state)
}
function selectOption(option) {
    const nextTextNodeId = option.nextText
    if (nextTextNodeId <= 0) {
        startGame();
    }
    state = Object.assign(state, option.setState)
    showTextNode(nextTextNodeId)
}

const textNodes = [
    {
        id: 1,
        text: 'Choose if Sam is a GIRL or Boy',
        options: [
            {
                text: 'Play as a Boy',
                setState: {boy: true},
                nextText: 2
            },
            {
                text: 'Play as a Girl',
                setState: {girl: true},
                nextText: 3
            }
        ]
    },
    {
        id: 2,
        text: 'Looks like Sam is a BOY. What hat should he wear?',
        options: [
            {
                text: 'A baseball cap?',
                setState: {baseballCap: true},
                nextText: 4
            },
            {
                text: 'A Cowboy hat?',
                setState: {cowboyHat: true},
                nextText: 4
            },
            {
                text: 'Or a Tophat?',
                setState: {topHat: true},
                nextText: 4
            }
        ]
    },
    {
        id: 3,
        text: 'Looks like Sam is a Girl. What hat should she wear?',
        options: [
            {
                text: 'A baseball cap?',
                setState: {baseballCap: true},
                nextText: 4
            },
            {
                text: 'A Cowboy hat?',
                setState: {cowboyHat: true},
                nextText: 4
            },
            {
                text: 'Or a Tophat?',
                setState: {topHat: true},
                nextText: 4
            }
        ]
    },
    {
        id: 4,
        text: 'Now That we know what our Gender is lets choose an accessory for our friend Pig.',
        options: [
            {
                text: 'A Fadora?',
                setState: {fadora: true},
                nextText: 5
            },
            {
                text: 'A Headband?',
                setState: {headband: true},
                nextText: 5
            },
            {
                text: 'Or Eyeshadow',
                setSate: {eyeshadow: true},
                nextText: 5
            }
        ]
    },
    {
        id: 5,
        text: 'Choose your starting location.',
        options: [
            {
                text: 'Mount Doom',
                setState: {mountDoomn: true},
                nextText: 6
            },
            {
                text: 'Ghost Town',
                setState: {ghostTown: true},
                nextText: 7
            }
        ]
    },
    {
        id: 6,
        text: 'Mount Doom Scene',
        options:[
            {
                text: 'Continue',
                nextText: 8
            }
        ]
    },
    {
        id: 7,
        text: 'Ghost Town scene',
        options:[
            {
                text: 'Continue',
                nextText: 8
            }
        ]
    },
    {
        id: 8,
        text: 'Battlefield scene. Choose Between the shark or the wolf',
        options:[
            {
                text: 'Shark',
                setState: {shark: true},
                nextText: 9
            },
            {
                text: 'Wolf',
                setState: {wolf: true},
                nextText: 10
            }
        ]
    },
    {
        id:9,
        text: 'You chose to fight the shark.',
        options:[
            {
                text: 'Continue',
                nextText: 11
            }
        ]
    },
    {
        id:10,
        text: 'You chose to fight the wolf.',
        options:[
            {
                text: 'Continue',
                nextText: 11
            }
        ]
    },
    {
        id:11,
        text: 'Vampire Bat Scene',
        options:[
            {
                text: 'Why does Sam have anxiety?',
                nextText: 12
            },
            {
                text: 'How can Sam overcome his anxiety?',
                nextText: 13
            },
            {
                text: 'Why is a raven like a writing desk?',
                nextText: 14
            },
            {
                text: 'Skip dialouge and proceed to fight the bats',
                nextText: 15
            },
        ]
    },
    {
        id:12,
        text: 'Explanation of question 1 and options to ask more',
        options:[
            {
                text: 'How can Sam overcome his anxiety?',
                nextText: 13
            },
            {
                text: 'Why is a raven like a writing desk?',
                nextText: 14
            },
            {
                text: 'Skip dialouge and proceed to fight the bats',
                nextText: 15
            },
        ]
    },
    {
        id:13,
        text: 'Explanation of question 2 and option to ask more',
        options:[
            {
                text: 'Correct Choices Continue Game',
                nextText: 16
            },
        ]
    },
    {
        id:14,
        text: 'Question 3 tells the player to not as silly questions and focus on the task at hand',
        options:[
            {
                text: 'Why does Sam have anxiety?',
                nextText: 12
            },
            {
                text: 'Why does Sam have anxiety?',
                nextText: 12
            },
            {
                text: 'Skip dialouge and proceed to fight the bats',
                nextText: 15
            },
            {
                text: 'Why is a raven like a writing desk?',
                nextText: 18
            },
        ]
    },
    {
        id: 18,
        text: 'Asking Question 3 twice Results in this form of a game over',
        options:[
            {
                text: 'Try Again',
                nextText: 11
            }
        
    ]
    },
    {
        id: 15,
        text: 'This option is reckless and results in a game over restarting the scinario',
        options:[
            {
                text: 'Try Again',
                nextText: 11
            }
        
    ]
    },
    {
        id: 16,
        text: 'Sam defeats the bats and learns a valuable lesson about his anxiety',
        options:[
            {
                text: 'Continue',
                nextText: 17
            }
        
    ]
    },
    {
        id: 17,
        text: 'Zombie Apocalypse Scene, no Choices',
        options:[
            {
                text: 'Continue',
                nextText: 19
            }
        ]
    },
    {
        id: 19,
        text: 'Level Up Scene. Player gains 50xp and a copper mind shield as well as the ability to pick one of three items',
        options:[
            {
                text: 'Bubble Machine',
                setState: {bubbleMachine: true, experiancePoints: true, copperMindShield: true},
                nextText: 20
            },
            {
                text: 'Band of Pacification',
                setState: {bandOfPacification: true, experiancePoints: true, copperMindShield: true},
                nextText: 20
            },
            {
                text: 'Stuffed Hedgehog',
                setState: {stuffedHedgeHog: true, experiancePoints: true, copperMindShield: true},
                nextText: 20
            }
        ]
    },
    // Going to need three different outcomes here. deppending on which path the player chose at the beging of the game (Mount Doom or Ghost Town). and also which item they chose when they leveled up will determine the videos being played in the final scene.
    
    {
        id: 20,
        text: 'Final Scene. Depending on wich path the player originally chose they will either focus on a memory of being at Mount Doom or the Ghost Town',
        options:[
        {
            text: 'Continue',
            nextText: 21
        },
        ]
    },
    {
        id: 21,
        text: 'END OF GAME',
        options:[
        {
            text: 'RESTART GAME',
            nextText: -1
        },
        ]
    }





   


]

startGame();
