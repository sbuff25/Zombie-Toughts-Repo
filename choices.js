const textNodes = [{
    id: 1,
    vidtime: 13000,
    vid: 'kt2D7xl06mk',
    text: 'Choose if Sam is a Annie or Hamilton',
    options: [{
            text: 'Play as Hamilton',
            setState: { hamilton: true },
            nextText: 'HAMILTON'
        },
        {
            text: 'Play as Annie',
            setState: { annie: true },
            nextText: 'ANNIE'
        }
    ]
},

{
    id: 'HAMILTON',
    vid: 'https://www.youtube.com/embed/LB_M44NCwUY',
    text: 'Looks like Sam is going to be Hamilton. What hat should he wear?',
    options: [{
        
            text: 'A baseball cap?',
            setState: { baseballCap: true },
            nextText: 'HAMILTON_BASEBALL'
        },
        {
            text: 'A Cowboy hat?',
            setState: { cowboyHat: true },
            nextText: 'HAMILTON_COWBOY'
        },
        // {
        //     text: 'A Tophat?',
        //     setState: { topHat: true },
        //     nextText: 4
        // }
    ]
},
{
    id: 'ANNIE',
    vid: 'https://www.youtube.com/embed/VN-rQ_Swi24',
    text: 'Looks like Sam is going to be Annie. What hat should she wear?',
    options: [{
            text: 'A baseball cap?',
            setState: { baseballCap: true },
            nextText: 'ANNIE_BASEBALL'
        },
        {
            text: 'A Cowboy hat?',
            setState: { cowboyHat: true },
            nextText: 'ANNIE_COWBOY'
        },
        // {
        //     text: 'A Tophat?',
        //     setState: { topHat: true },
        //     nextText: 4.1
        // }
    ]
},
{
    id: 'HAMILTON_BASEBALL',
    text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
    options: [{
            text: 'A Fadora?',
            setState: { fadora: true },
            nextText: 'HAMILTON_BASEBALL_FADORA'
        },
        {
            text: 'A Headband?',
            setState: { headband: true },
            nextText: 'HAMILTON_BASEBALL_HEADBAND'
        },
        // {
        //     text: 'Or Eyeshadow',
        //     setSate: { eyeshadow: true },
        //     nextText: 5
        // }
    ]
},
{
    id: 'HAMILTON_COWBOY',
    text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
    options: [{
            text: 'A Fadora?',
            setState: { fadora: true },
            nextText: 'HAMILTON_COWBOY_FADORA'
        },
        {
            text: 'A Headband?',
            setState: { headband: true },
            nextText: 'HAMILTON_COWBOY_HEADBAND'
        },
        // {
        //     text: 'Or Eyeshadow',
        //     setSate: { eyeshadow: true },
        //     nextText: 5
        // }
    ]
},
{
    id: 'HAMILTON_BASEBALL',
    text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
    options: [{
            text: 'A Fadora?',
            setState: { fadora: true },
            nextText: 'HAMILTON_BASEBALL_FADORA'
        },
        {
            text: 'A Headband?',
            setState: { headband: true },
            nextText: 'HAMILTON_BASEBALL_HEADBAND'
        },
        // {
        //     text: 'Or Eyeshadow',
        //     setSate: { eyeshadow: true },
        //     nextText: 5
        // }
    ]
},
{
    id: 'ANNIE_BASEBALL',
    text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
    options: [{
            text: 'A Fadora?',
            setState: { fadora: true },
            nextText: 'ANNIE_BASEBALL_FADORA'
        },
        {
            text: 'A Headband?',
            setState: { headband: true },
            nextText: 'ANNIE_BASEBALL_HEADBAND'
        },
        // {
        //     text: 'Or Eyeshadow',
        //     setSate: { eyeshadow: true },
        //     nextText: 5
        // }
    ]
},
{
    id: 'ANNIE_COWBOY',
    text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
    options: [{
            text: 'A Fadora?',
            setState: { fadora: true },
            nextText: 'ANNIE_COWBOY_FADORA'
        },
        {
            text: 'A Headband?',
            setState: { headband: true },
            nextText: 'ANNIE_COWBOY_HEADBAND'
        },
        // {
        //     text: 'Or Eyeshadow',
        //     setSate: { eyeshadow: true },
        //     nextText: 5
        // }
    ]
},
//DONE CHOOSING HAT AND ACCESORY
{
    id: 'HAMILTON_BASEBALL_FADORA',
    text: 'Choose your starting location. Hamilton',
    options: [{
            text: 'Mount Doom',
            setState: { mountDoomn: true },
            nextText: 'HAMILTON_BASEBALL_FADORA_MTDOOM'
        },
        {
            text: 'Ghost Town',
            setState: { ghostTown: true },
            nextText: 'HAMILTON_BASEBALL_FADORA_GHOSTTOWN'
        }
    ]
},
{
    id: 'HAMILTON_BASEBALL_HEADBAND',
    text: 'Choose your starting location. Hamilton',
    options: [{
            text: 'Mount Doom',
            setState: { mountDoomn: true },
            nextText: 'HAMILTON_BASEBALL_HEADBAND_MTDOOM'
        },
        {
            text: 'Ghost Town',
            setState: { ghostTown: true },
            nextText: 'HAMILTON_BASEBALL_HEADBAND_GHOSTOWN'
        }
    ]
},
{
    id: 'HAMILTON_COWBOY_FADORA',
    text: 'Choose your starting location. Hamilton',
    options: [{
            text: 'Mount Doom',
            setState: { mountDoomn: true },
            nextText: 'HAMILTON_COWBOY_FADORA_MTDOOM'
        },
        {
            text: 'Ghost Town',
            setState: { ghostTown: true },
            nextText: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN'
        }
    ]
},
{
    id: 'HAMILTON_COWBOY_HEADBAND',
    text: 'Choose your starting location. Hamilton',
    options: [{
            text: 'Mount Doom',
            setState: { mountDoomn: true },
            nextText: 'HAMILTON_COWBOY_HEADBAND_MTDOOM'
        },
        {
            text: 'Ghost Town',
            setState: { ghostTown: true },
            nextText: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN'
        }
    ]
},
{
    id: 'HAMILTON_BASEBALL_HEADBAND',
    text: 'Choose your starting location. Hamilton',
    options: [{
            text: 'Mount Doom',
            setState: { mountDoomn: true },
            nextText: 'HAMILTON_BASEBALL_HEADBAND_MTDOOM'
        },
        {
            text: 'Ghost Town',
            setState: { ghostTown: true },
            nextText: 'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN'
        }
    ]
},

//
{
    id: 'HAMILTON_COWBOY_HEADBAND_MTDOOM',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_HEADBAND_MTDOOM_BATTLE'
    }]
},
{
    id: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE'
    }]
},
{
    id: 'HAMILTON_COWBOY_FADORA_MTDOOM',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE'
    }]
},
{
    id: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE'
    }]
},
{
    id: 'HAMILTON_BASEBALL_HEADBAND_MTDOOM',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_BASEBALL_HEADBAND_MTDOOM_BATTLE'
    }]
},
{
    id: 'HAMILTON_BASEBALL_FADORA_MTDOOM',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_BASEBALL_FADORA_MTDOOM_BATTLE'
    }]
},
{
    id: 'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN_BATTLE'
    }]
},
{
    id: 'HAMILTON_BASEBALL_FADORA_GHOSTTOWN',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_BASEBALL_FADORA_GHOSTTOWN_BATTLE'
    }]
},
// END OF LOCATION SCENES
//BATTLESCENE
{
    id: 'HAMILTON_COWBOY_HEADBAND_MTDOOM_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE_VCAVE'
    }]
},
{
    id: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE_VCAVE'
    }]
},
{
    id: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE_VCAVE'
    }]
},
{
    id: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE_VCAVE'
    }]
},


///////////////////////////////////////////////////////////////////////////////////////////

{
    id: 'HAMILTON_BASEBALL_HEADBAND_MTDOOM_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 11.1
    }]
},
{
    id: 'HAMILTON_BASEBALL_FADORA_MTDOOM_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 11.2
    }]
},
{
    id: 'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 11.3
    }]
},
{
    id: 'HAMILTON_BASEBALL_FADORA_GHOSTTOWN_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 11.4
    }]
},
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
{
    id: 'HAMILTON_COWBOY_HEADBAND_MTDOOM_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 11.5
    }]
},
{
    id: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 11.6
    }]
},
{
    id: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 11.7
    }]
},
{
    id: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE',
    text: 'BATTLESCENE',
    options: [{
        text: 'Continue',
        nextText: 11.8
    }]
},
/////////////////////////////////////////////////////////////////////////////////////
//QUESTIONS SCENE
//11.1
{
    id: 11.1,
    text: 'Vampire Bat Scene as Hamilton',
    options: [{
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.12
        },
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.13
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.14
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.15
        },
    ]
},
{
    id: 11.11,
    text: 'Vampire Bat Scene as Hamilton',
    options: [
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.13
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.14
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.15
        },
    ]
},
{
    id: 11.12,
    text: 'Explanation of question 1 and options to ask more Hamilton',
    setState:{question1: true},
    options: [{
            text: 'contine',
            setState: {question2: true},
            nextText: 11.11
        },
        {
            text: 'Why is a raven like a writing desk? Hamilton',
            nextText: 11.14
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.15
        },
    ]
},
{
    id: 11.13,
    text: 'Explanation of question 2, No option to repeat Hamilton',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.1
    },
    ]
},
{
    id: 11.14,
    text: 'Question 3 tells the player to not ask silly questions and focus on the task at hand Hamilton',
    options: [{
            text: 'Why does Sam have anxiety?Hamilton',

            nextText: 12
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.15
        },
        {
            text: 'Why is a raven like a writing desk? Hamilton',
            nextText: 18
        },
    ]
},
{
    id: 11.15,
    text: 'This option is reckless and results in a game over restarting the scinario Hamilton',
    options: [{
            text: 'Try Again',
            nextText: 11.1
        }

    ]
},
//11.2

//11.3
//11.4
//11.5
//11.6

















// Girl
{
    id: 5.1,
    text: 'Choose your starting location Annie.',
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
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 8
    }]
},
// Girl
{
    id: 6.1,
    text: 'Mount Doom Scene, Annie',
    options: [{
        text: 'Continue',
        nextText: 8.1
    }]
},
// Boy
{
    id: 7,
    text: 'Ghost Town scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 8
    }]
},
// Girl
{
    id: 7.1,
    text: 'Ghost Town scene, Annie',
    options: [{
        text: 'Continue',
        nextText: 8
    }]
},
// Girl
{
    id: 7.2,
    text: 'Ghost Town scene were pig complements you on choosing COWBOYHAT, Annie',
    options: [{
        text: 'Continue',
        nextText: 8.1
    }]
},
// Boy
{
    id: 7.3,
    text: 'Ghost Town scene were pig complements you on choosing COWBOYHAT, Hamilton',
    options: [{
        text: 'Continue',
        nextText: 8
    }]
},
// Boy
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

// Boy
{
    id: 12.1,
    text: 'Explanation of question 1 and options to ask more Hamilton',
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
    text: 'Explanation of question 1 and options to ask more Annie',
    setState:{question1: true},
    options: [{
            text: 'How can Sam overcome his anxiety? Annie',
            setState: {question2: true},
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
    }
    ]
},
// Boy

// Girl
{
    id: 13.2,
    text: 'Explanation of question 2 and option to ask more Annie',
    options: [{
        text: 'Continue',
        nextText: 16.1
    }
    ]
},
// Boy

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
}
]
