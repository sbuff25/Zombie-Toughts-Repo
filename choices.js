const textNodes = [{
    id: 1,
    vidtime: 13000,
    vid: 'kt2D7xl06mk',
    text: 'Choose if Sam is Annie or Hamilton',
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
    id: 'HAMILTON_COWBOY_FADORA_MTDOOM',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE'
    }]
},
//
{
    id: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN',
    text: 'Mount Doom Scene Hamilton',
    options: [{
        text: 'Continue',
        nextText: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE'
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
            nextText: 11.133
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
    id: 11.133,
    text: 'Explanation of question 2',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.1
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
    id: 11.14,
    text: 'Question 3 tells the player to not ask silly questions and focus on the task at hand Hamilton',
    options: [{
            text: 'Why does Sam have anxiety?Hamilton',

            nextText: 11.12
        },
        {
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.12 
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.15
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
{
    id: 11.2,
    text: 'Vampire Bat Scene as Hamilton',
    options: [{
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.22
        },
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.233
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.24
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.25
        },
    ]
},
{
    id: 11.21,
    text: 'Vampire Bat Scene as Hamilton',
    options: [
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.23
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.24
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.25
        },
    ]
},
{
    id: 11.22,
    text: 'Explanation of question 1 and options to ask more Hamilton',
    setState:{question1: true},
    options: [{
            text: 'contine',
            setState: {question2: true},
            nextText: 11.21
        },
        {
            text: 'Why is a raven like a writing desk? Hamilton',
            nextText: 11.24
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.25
        },
    ]
},
{
    id: 11.23,
    text: 'Explanation of question 2, No option to repeat Hamilton',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.2
    },
    ]
},
{
    id: 11.233,
    text: 'Explanation of question 2',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.2
    },
    {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.24
    },
    {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.25
    },  
    
    ]
},
{
    id: 11.24,
    text: 'Question 3 tells the player to not ask silly questions and focus on the task at hand Hamilton',
    options: [{
            text: 'Why does Sam have anxiety?Hamilton',

            nextText: 11.22
        },
        {
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.22 
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.25
        },
    ]
},
{
    id: 11.25,
    text: 'This option is reckless and results in a game over restarting the scinario Hamilton',
    options: [{
            text: 'Try Again',
            nextText: 11.2
        }

    ]
},
//11.3
{
    id: 11.3,
    text: 'Vampire Bat Scene as Hamilton',
    options: [{
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.32
        },
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.333
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.34
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.35
        },
    ]
},
{
    id: 11.31,
    text: 'Vampire Bat Scene as Hamilton',
    options: [
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.33
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.34
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.35
        },
    ]
},
{
    id: 11.32,
    text: 'Explanation of question 1 and options to ask more Hamilton',
    setState:{question1: true},
    options: [{
            text: 'contine',
            setState: {question2: true},
            nextText: 11.31
        },
        {
            text: 'Why is a raven like a writing desk? Hamilton',
            nextText: 11.34
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.35
        },
    ]
},
{
    id: 11.33,
    text: 'Explanation of question 2, No option to repeat Hamilton',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.3
    },
    ]
},
{
    id: 11.333,
    text: 'Explanation of question 2',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.3
    },
    {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.34
    },
    {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.35
    },  
    
    ]
},
{
    id: 11.34,
    text: 'Question 3 tells the player to not ask silly questions and focus on the task at hand Hamilton',
    options: [{
            text: 'Why does Sam have anxiety?Hamilton',

            nextText: 11.32
        },
        {
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.32 
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.35
        },
    ]
},
{
    id: 11.35,
    text: 'This option is reckless and results in a game over restarting the scinario Hamilton',
    options: [{
            text: 'Try Again',
            nextText: 11.3
        }

    ]
},
//11.4
{
    id: 11.4,
    text: 'Vampire Bat Scene as Hamilton',
    options: [{
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.42
        },
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.433
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.44
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.45
        },
    ]
},
{
    id: 11.41,
    text: 'Vampire Bat Scene as Hamilton',
    options: [
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.33
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.34
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.35
        },
    ]
},
{
    id: 11.32,
    text: 'Explanation of question 1 and options to ask more Hamilton',
    setState:{question1: true},
    options: [{
            text: 'contine',
            setState: {question2: true},
            nextText: 11.41
        },
        {
            text: 'Why is a raven like a writing desk? Hamilton',
            nextText: 11.44
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.45
        },
    ]
},
{
    id: 11.43,
    text: 'Explanation of question 2, No option to repeat Hamilton',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.4
    },
    ]
},
{
    id: 11.433,
    text: 'Explanation of question 2',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.4
    },
    {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.44
    },
    {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.45
    },  
    
    ]
},
{
    id: 11.44,
    text: 'Question 3 tells the player to not ask silly questions and focus on the task at hand Hamilton',
    options: [{
            text: 'Why does Sam have anxiety?Hamilton',

            nextText: 11.42
        },
        {
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.42 
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.45
        },
    ]
},
{
    id: 11.45,
    text: 'This option is reckless and results in a game over restarting the scinario Hamilton',
    options: [{
            text: 'Try Again',
            nextText: 11.4
        }

    ]
},
//11.5
{
    id: 11.5,
    text: 'Vampire Bat Scene as Hamilton',
    options: [{
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.52
        },
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.533
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.54
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.55
        },
    ]
},
{
    id: 11.51,
    text: 'Vampire Bat Scene as Hamilton',
    options: [
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.53
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.54
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.55
        },
    ]
},
{
    id: 11.52,
    text: 'Explanation of question 1 and options to ask more Hamilton',
    setState:{question1: true},
    options: [{
            text: 'contine',
            setState: {question2: true},
            nextText: 11.51
        },
        {
            text: 'Why is a raven like a writing desk? Hamilton',
            nextText: 11.54
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.55
        },
    ]
},
{
    id: 11.53,
    text: 'Explanation of question 2, No option to repeat Hamilton',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.5
    },
    ]
},
{
    id: 11.533,
    text: 'Explanation of question 2',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.5
    },
    {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.54
    },
    {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.55
    },  
    
    ]
},
{
    id: 11.54,
    text: 'Question 3 tells the player to not ask silly questions and focus on the task at hand Hamilton',
    options: [{
            text: 'Why does Sam have anxiety?Hamilton',

            nextText: 11.52
        },
        {
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.52 
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.55
        },
    ]
},
{
    id: 11.55,
    text: 'This option is reckless and results in a game over restarting the scinario Hamilton',
    options: [{
            text: 'Try Again',
            nextText: 11.5
        }

    ]
},
//11.6
{
    id: 11.6,
    text: 'Vampire Bat Scene as Hamilton',
    options: [{
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.62
        },
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.633
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.64
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.65
        },
    ]
},
{
    id: 11.61,
    text: 'Vampire Bat Scene as Hamilton',
    options: [
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.63
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.64
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.65
        },
    ]
},
{
    id: 11.62,
    text: 'Explanation of question 1 and options to ask more Hamilton',
    setState:{question1: true},
    options: [{
            text: 'contine',
            setState: {question2: true},
            nextText: 11.61
        },
        {
            text: 'Why is a raven like a writing desk? Hamilton',
            nextText: 11.64
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.65
        },
    ]
},
{
    id: 11.63,
    text: 'Explanation of question 2, No option to repeat Hamilton',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.6
    },
    ]
},
{
    id: 11.633,
    text: 'Explanation of question 2',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.6
    },
    {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.64
    },
    {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.65
    },  
    
    ]
},
{
    id: 11.64,
    text: 'Question 3 tells the player to not ask silly questions and focus on the task at hand Hamilton',
    options: [{
            text: 'Why does Sam have anxiety?Hamilton',

            nextText: 11.62
        },
        {
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.62 
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.65
        },
    ]
},
{
    id: 11.65,
    text: 'This option is reckless and results in a game over restarting the scinario Hamilton',
    options: [{
            text: 'Try Again',
            nextText: 11.6
        }

    ]
},
//11.7
{
    id: 11.7,
    text: 'Vampire Bat Scene as Hamilton',
    options: [{
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.72
        },
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.733
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.74
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.75
        },
    ]
},
{
    id: 11.71,
    text: 'Vampire Bat Scene as Hamilton',
    options: [
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.73
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.74
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.75
        },
    ]
},
{
    id: 11.72,
    text: 'Explanation of question 1 and options to ask more Hamilton',
    setState:{question1: true},
    options: [{
            text: 'contine',
            setState: {question2: true},
            nextText: 11.71
        },
        {
            text: 'Why is a raven like a writing desk? Hamilton',
            nextText: 11.74
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.75
        },
    ]
},
{
    id: 11.73,
    text: 'Explanation of question 2, No option to repeat Hamilton',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.7
    },
    ]
},
{
    id: 11.733,
    text: 'Explanation of question 2',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.7
    },
    {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.74
    },
    {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.75
    },  
    
    ]
},
{
    id: 11.74,
    text: 'Question 3 tells the player to not ask silly questions and focus on the task at hand Hamilton',
    options: [{
            text: 'Why does Sam have anxiety?Hamilton',

            nextText: 11.72
        },
        {
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.72 
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.75
        },
    ]
},
{
    id: 11.75,
    text: 'This option is reckless and results in a game over restarting the scinario Hamilton',
    options: [{
            text: 'Try Again',
            nextText: 11.7
        }

    ]
},
//11.8
{
    id: 11.8,
    text: 'Vampire Bat Scene as Hamilton',
    options: [{
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.82
        },
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.833
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.84
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.85
        },
    ]
},
{
    id: 11.81,
    text: 'Vampire Bat Scene as Hamilton',
    options: [
        {
            text: 'How can Sam overcome his anxiety Hamilton?',
            nextText: 11.83
        },
        {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.84
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.85
        },
    ]
},
{
    id: 11.82,
    text: 'Explanation of question 1 and options to ask more Hamilton',
    setState:{question1: true},
    options: [{
            text: 'contine',
            setState: {question2: true},
            nextText: 11.81
        },
        {
            text: 'Why is a raven like a writing desk? Hamilton',
            nextText: 11.84
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.85
        },
    ]
},
{
    id: 11.83,
    text: 'Explanation of question 2, No option to repeat Hamilton',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.8
    },
    ]
},
{
    id: 11.833,
    text: 'Explanation of question 2',
    options: [{
        text: 'Why does Sam have anxiety?',
        nextText: 12.8
    },
    {
            text: 'Why is a raven like a writing desk Hamilton?',
            nextText: 11.84
    },
    {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.85
    },  
    
    ]
},
{
    id: 11.84,
    text: 'Question 3 tells the player to not ask silly questions and focus on the task at hand Hamilton',
    options: [{
            text: 'Why does Sam have anxiety?Hamilton',

            nextText: 11.82
        },
        {
            text: 'Why does Sam have anxiety Hamilton?',
            nextText: 11.82 
        },
        {
            text: 'Skip dialouge and proceed to fight the bats Hamilton',
            nextText: 11.85
        },
    ]
},
{
    id: 11.85,
    text: 'This option is reckless and results in a game over restarting the scinario Hamilton',
    options: [{
            text: 'Try Again',
            nextText: 11.8
        }

    ]
},

//Sucsess

//12.1
{
    id: 12.1,
    text: 'Master Anxiety and defeat the Bats',
    options: [{
            text: 'Continue',
            nextText: 13.1
        }

    ]
},
//12.2
{
    id: 12.2,
    text: 'Master Anxiety and defeat the Bats',
    options: [{
            text: 'Continue',
            nextText: 13.2
        }

    ]
},
//12.3
{
    id: 12.3,
    text: 'Master Anxiety and defeat the Bats',
    options: [{
            text: 'Continue',
            nextText: 13.3
        }

    ]
},
//12.4
{
    id: 12.4,
    text: 'Master Anxiety and defeat the Bats',
    options: [{
            text: 'Continue',
            nextText: 13.4
        }

    ]
},
//12.5
{
    id: 12.5,
    text: 'Master Anxiety and defeat the Bats',
    options: [{
            text: 'Continue',
            nextText: 13.5
        }

    ]
},
//12.6
{
    id: 12.6,
    text: 'Master Anxiety and defeat the Bats',
    options: [{
            text: 'Continue',
            nextText: 13.6
        }

    ]
},
//12.7
{
    id: 12.7,
    text: 'Master Anxiety and defeat the Bats',
    options: [{
            text: 'Continue',
            nextText: 13.7
        }

    ]
},
//12.8
{
    id: 12.8,
    text: 'Master Anxiety and defeat the Bats',
    options: [{
            text: 'Continue',
            nextText: 13.8
        }

    ]
},
// Level UP Scene 50xp copper mind Sheild final scene and confrontation with Boss.
//Hamilton wears a basballcap, pig wears a headband, you whent to MT DOOM  
//13.1
{
    id: 13.1,
    text: 'Level up Choose Between 3 items',
    options: [{
            text: 'Bubble Machine',
            setState: {bubbleMachine:true, experiancePoints:true, copperMindShield:true},
            nextText: 'HAMILTON_BASEBALL_HEADBAND_MTDOOM_BATTLE_BB_MACHINE'
        },
        {
            text: 'Tanngle Band of Pacification',
            setState: {bandOfPacification:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_BASEBALL_HEADBAND_MTDOOM_BATTLE_BA_PACIFI'
        },
        {
            text: 'Hedgehog named Henry',
            setState: {stuffedHedgeHog:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_BASEBALL_HEADBAND_MTDOOM_BATTLE_HH_HENERY'
        }

    ]
},
//Hamilton wears a basballcap, pig wears a FADORA, and whent to MT DOOM 
//13.2
{
    id: 13.2,
    text: 'Level up Choose Between 3 items',
    options: [{
            text: 'Bubble Machine',
            setState: {bubbleMachine:true, experiancePoints:true, copperMindShield:true},
            nextText: 'HAMILTON_BASEBALL_FADORA_MTDOOM_BATTLE_BB_MACHINE'
        },
        {
            text: 'Tanngle Band of Pacification',
            setState: {bandOfPacification:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_BASEBALL_FADORA_MTDOOM_BATTLE_BA_PACIFI'
        },
        {
            text: 'Hedgehog named Henry',
            setState: {stuffedHedgeHog:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_BASEBALL_FADORA_MTDOOM_BATTLE_HH_HENERY'
        }

    ]
},
//Hamilton wears a COWBOYHAT, pig wears a HEADBAND, and whent to MT DOOM 
//13.3
{
    id: 13.3,
    text: 'Level up Choose Between 3 items',
    options: [{
            text: 'Bubble Machine',
            setState: {bubbleMachine:true, experiancePoints:true, copperMindShield:true},
            nextText: 'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN_BATTLE_BB_MACHINE'
        },
        {
            text: 'Tanngle Band of Pacification',
            setState: {bandOfPacification:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN_BATTLE_BA_PACIFI'
        },
        {
            text: 'Hedgehog named Henry',
            setState: {stuffedHedgeHog:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN_BATTLE_HH_HENERY'
        }

    ]
},
//Hamilton wears a COWBOYHAT, pig wears a FADORA, and whent to MT DOOM 
//13.4
{
    id: 13.4,
    text: 'Level up Choose Between 3 items',
    options: [{
            text: 'Bubble Machine',
            setState: {bubbleMachine:true, experiancePoints:true, copperMindShield:true},
            nextText: 'HAMILTON_BASEBALL_FADORA_GHOSTTOWN_BATTLE_BB_MACHINE'
        },
        {
            text: 'Tanngle Band of Pacification',
            setState: {bandOfPacification:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_BASEBALL_FADORA_GHOSTTOWN_BATTLE_BA_PACIFI'
        },
        {
            text: 'Hedgehog named Henry',
            setState: {stuffedHedgeHog:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_BASEBALL_FADORA_GHOSTTOWN_BATTLE_HH_HENERY'
        }

    ]
},
//13.5
{
    id: 13.3,
    text: 'Level up Choose Between 3 items',
    options: [{
            text: 'Bubble Machine',
            setState: {bubbleMachine:true, experiancePoints:true, copperMindShield:true},
            nextText: 'HAMILTON_COWBOY_HEADBAND_MTDOOM_BATTLE_BB_MACHINE'
        },
        {
            text: 'Tanngle Band of Pacification',
            setState: {bandOfPacification:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_COWBOY_HEADBAND_MTDOOM_BATTLE_BA_PACIFI'
        },
        {
            text: 'Hedgehog named Henry',
            setState: {stuffedHedgeHog:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_COWBOY_HEADBAND_MTDOOM_BATTLE_HH_HENERY'
        }

    ]
},
//13.6
{
    id: 13.6,
    text: 'Level up Choose Between 3 items',
    options: [{
            text: 'Bubble Machine',
            setState: {bubbleMachine:true, experiancePoints:true, copperMindShield:true},
            nextText: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE_BB_MACHINE'
        },
        {
            text: 'Tanngle Band of Pacification',
            setState: {bandOfPacification:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE_BA_PACIFI'
        },
        {
            text: 'Hedgehog named Henry',
            setState: {stuffedHedgeHog:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE_HH_HENERY'
        }

    ]
},
//13.7
{
    id: 13.7,
    text: 'Level up Choose Between 3 items',
    options: [{
            text: 'Bubble Machine',
            setState: {bubbleMachine:true, experiancePoints:true, copperMindShield:true},
            nextText: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE_BB_MACHINE'
        },
        {
            text: 'Tanngle Band of Pacification',
            setState: {bandOfPacification:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE_BA_PACIFI'
        },
        {
            text: 'Hedgehog named Henry',
            setState: {stuffedHedgeHog:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE_HH_HENERY'
        }

    ]
},
//13.8
{
    id: 13.8,
    text: 'Level up Choose Between 3 items',
    options: [{
            text: 'Bubble Machine',
            setState: {bubbleMachine:true, experiancePoints:true, copperMindShield:true},
            nextText: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE_BB_MACHINE'
        },
        {
            text: 'Tanngle Band of Pacification',
            setState: {bandOfPacification:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE_BA_PACIFI'
        },
        {
            text: 'Hedgehog named Henry',
            setState: {stuffedHedgeHog:true, experiancePoints:true, copperMindShield:true},
            nextText:'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE_HH_HENERY'
        }

    ]
},
//ENDING.1
//FINAL OUTCOMES
{
    id: 'HAMILTON_BASEBALL_HEADBAND_MTDOOM_BATTLE_BB_MACHINE',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.2
{
    id: 'HAMILTON_BASEBALL_HEADBAND_MTDOOM_BATTLE_BA_PACIFI',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.3
{
    id: 'HAMILTON_BASEBALL_HEADBAND_MTDOOM_BATTLE_HH_HENERY',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.4
{
    id: 'HAMILTON_BASEBALL_FADORA_MTDOOM_BATTLE_BB_MACHINE',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.5
{
    id: 'HAMILTON_BASEBALL_FADORA_MTDOOM_BATTLE_BA_PACIFI',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.6
{
    id: 'HAMILTON_BASEBALL_FADORA_MTDOOM_BATTLE_HH_HENERY',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.7
{
    id: 'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN_BATTLE_BB_MACHINE',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.8
{
    id: 'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN_BATTLE_BA_PACIFI',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.9
{
    id: 'HAMILTON_BASEBALL_HEADBAND_GHOSTTOWN_BATTLE_HH_HENERY',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.10
{
    id: 'HAMILTON_BASEBALL_FADORA_GHOSTTOWN_BATTLE_BB_MACHINE',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.11
{
    id: 'HAMILTON_BASEBALL_FADORA_GHOSTTOWN_BATTLE_BA_PACIFI',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.12
{
    id: 'HAMILTON_BASEBALL_FADORA_GHOSTTOWN_BATTLE_HH_HENERY',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.13
{
    id: 'HAMILTON_BASEBALL_FADORA_GHOSTTOWN_BATTLE_HH_HENERY',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.14
{
    id: 'HAMILTON_COWBOY_HEADBAND_MTDOOM_BATTLE_BA_PACIFI',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.15
{
    id: 'HAMILTON_COWBOY_HEADBAND_MTDOOM_BATTLE_HH_HENERY',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.16
{
    id: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE_BB_MACHINE',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.17
{
    id: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE_BA_PACIFI',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.18
{
    id: 'HAMILTON_COWBOY_FADORA_MTDOOM_BATTLE_HH_HENERY',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.19
{
    id: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE_BB_MACHINE',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.20
{
    id: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE_BA_PACIFI',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.21
{
    id: 'HAMILTON_COWBOY_HEADBAND_GHOSTTOWN_BATTLE_HH_HENERY',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.22
{
    id: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE_BB_MACHINE',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.23
{
    id: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE_BA_PACIFI',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
//ENDING.24
{
    id: 'HAMILTON_COWBOY_FADORA_GHOSTTOWN_BATTLE_HH_HENERY',
    text: 'Final Battle and End of game',
    options: [{
        text: 'RESTART GAME',
        nextText: -1
    }]

},
]