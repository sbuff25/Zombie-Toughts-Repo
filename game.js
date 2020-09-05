const textNodes = [{
            id: 1,
            vid: '~/video/AH1.mp4', // kick-out
            text: 'Choose if Sam is a Annie or Hamilton',
            options: [{
                    text: 'A',
                    setState: { annie: true },
                    nextText: 1.1
                },
                {
                    text: 'B',
                    setState: { hamilton: true },
                    nextText: 1.01
                }
            ]
        },
        {
            id: 1.1,
            vid: '~/video/A2.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    setState: { annie: true },
                    nextText: 2.1
                }
            ]
        },
        {
            id: 1.01,
            vid: '~/video/H2.mp4', // kick-out
            text: '',
            options: [{
                    text: 'Continue',
                    setState: { hamilton: true },
                    nextText: 2
                }
            ]
        },
        {
            id: 2,
            vid: '~/video/H3.mp4', // god-less
            text: '',
            options: [{

                    text: 'Cowboy Hat?',
                    setState: { cowboyHat: true },
                    nextText: 4.001
                },
                {
                    text: 'Baseball Cap?',
                    setState: { baseballCap: true },
                    nextText: 4.01
                },
            ]
        },
        {
            id: 2.1,
            vid: '~/video/A3.mp4', // 2 much 2
            text: '',
            options: [{
                    text: 'Cowboy Hat?',
                    setState: { baseballCap: true },
                    nextText: 4.0019
                },
                {
                    text: 'Baseball Cap?',
                    setState: { cowboyHat: true },
                    nextText: 4.019
                },
            ]
        },
        {
            id: 4.01,//B-hat
            text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
            vid: '~/video/H4B.mp4',
            options: [{
                    text: 'A Fedora?',
                    setState: { fedora: true },
                    nextText: 4.02
                },
                {
                    text: 'A Headband?',
                    setState: { headband: true },
                    nextText: 4.03
                },
            ]
        },
        {
            id: 4.001,
            vid: '~/video/H4A.mp4',//C-hat
            text: 'Now That we know what our character is lets choose an accessory for our friend Pig.',
            options: [{
                    text: 'A Fedora?',
                    setState: { fedora: true },
                    nextText: 4.002
                },
                {
                    text: 'A Headband?',
                    setState: { headband: true },
                    nextText: 4.003
                },
            ]
        },
        // Boy
        {
            id: 4.02,
            vid: '~/video/H5D.mp4',
            text: 'Choose your starting location.',
            options: [{
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.022
                },
                {
                    text: 'Mount Doom',
                    setState: { mountDoom: true },
                    nextText: 4.021
                }
            ]
        },
        {
            id: 4.03,
            vid: '~/video/H5C.mp4',
            text: 'Choose your starting location.',
            options: [{
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.032
                },
                {
                    text: 'Mount Doom',
                    setState: { mountDoom: true },
                    nextText: 4.031
                }
            ]
        },
        {
            id: 4.002,
            vid: '~/video/H5B.mp4',
            text: 'Choose your starting location. Hamilton',
            options: [{
                    text: 'Ghost Town',
                    setState: { mountDoom: true },
                    nextText: 4.0022
                },
                {
                    text: 'Mount Doom',
                    setState: { mountDoom: true },
                    nextText: 4.0021
                }
            ]
        },
        {
            id: 4.003,
            vid: '~/video/H5A.mp4',
            text: 'Choose your starting location. Hamilton',
            options: [{
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.0032
                },
                {
                    text: 'Mount Doom',
                    setState: { mountDoom: true },
                    nextText: 4.0031
                }
            ]
        },
        // Boy baseball hat
        {
            id: 4.021,
            vid: '~/video/H6D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_B_F'
            }]
        },
        {
            id: 4.031,
            vid: '~/video/H6C.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_B_H'
            }]
        },
        {
            id: 4.022,
            vid: '~/video/H7D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.02
            }]
        },
        {
            id: 4.032,
            vid: '~/video/H7C.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.002
            }]
        },
        // Boy Cowboy hat
        {
            id: 4.0021,
            vid: '~/video/H6B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_C_F'
            }]
        },
        {
            id: 4.0022,
            vid: '~/video/H7B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_GHOST_TOWN_C_F'
            }]
        },
        {
            id: 4.0031,
            vid: '~/video/H6A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_C_H'
            }]
        },
        {
            id: 4.0032,
            vid: '~/video/H7A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        {
            id: 4.019,
            vid: '~/video/A4B.mp4',
            text: '',
            options: [{
                    text: 'A Headband',
                    setState: { headband: true },
                    nextText: 4.039
                },
                {
                    text: 'A Fedora',
                    setState: { fedora: true },
                    nextText: 4.029
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
            vid: '~/video/A4A.mp4',
            text: '',
            options: [{
                    text: 'Headband?',
                    setState: { headband: true },
                    nextText: 4.0039
                },
                {
                    text: 'Fedora?',
                    setState: { fedora: true },
                    nextText: 4.0029
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
            vid: '~/video/A5D.mp4',
            text: '',
            options: [
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.0229
                },
                {
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.0219
                }
            ]
        },
        //Baseball hat head band
        {
            id: 4.039,
            vid: '~/video/A5C.mp4',
            text: '',
            options: [
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.0329
                },
                {
                    text: 'Mount Doom',
                    setState: { mountDoomn: true },
                    nextText: 4.0319
                }
            ]
        },
        {
            // Still need Correct video for A5B
            // Annie with Cowboy hat and Pig with the fedora
            id: 4.0029,
            vid: '~/video/',
            text: '',
            options: [{
                    text: 'Mount Doom',
                    setState: { mountDoom: true },
                    nextText: 4.002199
                },
                {
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.0002299
                }
            ]
        },
        {
            // Still need Correct video for A5B
            // Annie with Cowboy hat and Pig with the fedora
            id: 4.0002299,
            vid: '~/video/A6B.mp4',
            text: '',
            options: [
                {
                    text: 'Continue',
                    setState: { ghostTown: true },
                    nextText: 4.002299
                }
            ]
        },
        //Annie Cowboyhat Headband
        {
            id: 4.0039,
            vid: '~/video/A5A.mp4',
            text: '',
            options: [{
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.100329
                },
                {
                    text: 'Mount Doom',
                    setState: { mountDoom: true },
                    nextText: 4.00319
                }
            ]
        },
        {
            id: 4.100329,
            vid: '~/video/A7A.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 4.00329
                }
            ]
        },
        {
            id: 4.0219,
            vid: '~/video/A6D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 4.00229
            }]
        },
        {
            id: 4.0319,
            vid: '~/video/A6C.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_B_H'
            }]
        },
        {
            id: 4.0229,
            vid: '~/video/A7D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 4.0329,
            vid: '~/video/A7C.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.01
            }]
        },
        // Boy Cowboy hat
        // Fedora Cowboy hat Mount Doom
        {
            id: 4.00219,
            vid: '~/video/A6B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_C_F'
            }]
        },
        // Cowboyhat Fedora Ghosttown
        /////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////
        {
            id: 4.002299,
            vid: '~/video/A10B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'G_Town_Annie'
            }]
        },
        {
            id: 4.00229,
            vid: '~/video/A8D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_C_F_PT_2'
            }]
        },
        {
            id: 4.00319,
            vid: '~/video/A6A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_C_H'
            }]
        },
        {
            id: 4.00329,
            vid: '~/video/A10A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'G_Town_Annie'
            }]
        },
        // Add Ghost Town Scene Here

        {
            id: 'H_GHOST_TOWN_C_F',
            vid: '~/video/H10B.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9
                }
            ]
        },


        // Add Mount Doom Here Hamilton
        {
            id: 'H_MT_DOOM_C_H',
            vid: '~/video/H8A.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        {
            id: 'H_MT_DOOM_C_F',
            vid: '~/video/H8B.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        {
            id: 'H_MT_DOOM_B_F',
            vid: '~/video/H8D.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        {
            id: 'H_MT_DOOM_B_H',
            vid: '~/video/H8C.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        // Add Mount Doom Annie
        {
            id: 'MT_DOOM_C_H',
            vid: '~/video/A8A.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.1
                }
            ]
        },
        {
            id: 'MT_DOOM_C_F',
            vid: '~/video/A8B.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 'MT_DOOM_C_F_PT_2'
                }
            ]
        },
        {
            id: 'MT_DOOM_C_F_PT_2',
            vid: '~/video/A9.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.1
                }
            ]
        },
        // MT DOOM Baseball Hat
        {
            id: 'MT_DOOM_B_H',
            vid: '~/video/A8C.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 'MT_DOOM_C_F_PT_2'
                }
            ]
        },
        // H10A.MP4
        // Still Needs Vid Upload
        {
            id: 8,
            vid: '~/video/',
            text: '',
            options: [{
                    text: 'Continue',
    
                    nextText: 9
                }
            ]
        },
        {
            id: 8.02,
            vid: '~/video/H10D.mp4',
            text: '',
            options: [{
                    text: 'Continue',
    
                    nextText: 9
                }
            ]
        },
        {
            id: 8.002,
            vid: '~/video/H10C.mp4',
            text: '',
            options: [{
                    text: 'Continue',
    
                    nextText: 9
                }
            ]
        },
        // Girl
        {
            id: 8.1,
            vid: '~/video/A10D.mp4',
            text: '',
            options: [{
                    text: 'continue',
                    nextText: 'G_Town_Annie'
                }
               
            ]
        },
        {
            id: 8.01,
            vid: '~/video/A10C.mp4',
            text: '',
            options: [{
                    text: 'continue',
                    nextText: 'G_Town_Annie'
                }
               
            ]
        },

        // After Hats are lost
        {
            id: 'G_Town_Annie',
            vid: '~/video/A11.mp4',
            text: '',
            options: [{
                    text: 'continue',
                    nextText: 9.1
                }
               
            ]
        },
        // Boy
        ///// When hamilton loses hat 
        {
            id: 9,
            vid: '~/video/H11.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        {
            id: 9.02,
            vid: '~/video/H9.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        // Girl
        {
            id: 9.1,
            vid: '~/video/A12.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 11.1
            }]
        },
        // Boy
        {
            id: 10,
            vid: '~/video/',
            text: 'You chose to fight the wolf.Hamilton',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        // Girl
        {
            id: 10.1,
            vid: '~/video/',
            text: 'You chose to fight the wolf.Annie',
            options: [{
                text: 'Continue',
                nextText: 11.1
            }]
        },
        // Boy
        {
            id: 11,
            vid: '~/video/H12.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 11.11
                },
            ]
        },
        {
            id: 11.11,
            vid: '~/video/H13.mp4',
            text: '',
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
            ]
        },
        // Girl
        {
            id: 11.1,
            vid: '~/video/A13.mp4',
            text: 'Vampire Bat Scene as Annie',
            options: [{
                    text: 'Why does Sam have anxiety? Annie',
                    nextText: 12.1
                },
                {
                    text: 'How can Sam overcome his anxiety? Annie',
                    nextText: 13.02
                },
                {
                    text: 'Why is a raven like a writing desk? Annie',
                    nextText: 18.1
                },
                // {
                //     text: 'Skip dialouge and proceed to fight the bats Annie',
                //     nextText: 15.1
                // },
            ]
        },
        {
            id: 'retry',
            vid: '~/video/A18B.mp4',
            text: 'Vampire Bat Scene as Annie',
            options: [{
                    text: 'Why does Sam have anxiety? Annie',
                    nextText: 12.2
                },
                {
                    text: 'How can Sam overcome his anxiety? Annie',
                    nextText: 13.02
                },
                {
                    text: 'Why is a raven like a writing desk? Annie',
                    nextText: 18.1
                },
                // {
                //     text: 'Skip dialouge and proceed to fight the bats Annie',
                //     nextText: 15.1
                // },
            ]
        },
        {
            id: 'retry_02',
            vid: '~/video/A19B.mp4',
            text: 'Vampire Bat Scene as Annie',
            options: [
                {
                    text: 'How can Sam overcome his anxiety? Annie',
                    nextText: 'final_move'
                },
                // {
                //     text: 'Skip dialouge and proceed to fight the bats Annie',
                //     nextText: 15.1
                // },
            ]
        },
        {
            id: 'final_move',
            vid: '~/video/A17.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16.1
            }]
        },
        // Boy
        {
            id: 12,
            vid: '~/video/H14.mp4',
            text: '',

            options: [{
                    text: 'How can Sam overcome his anxiety? Hamilton',
        
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
        {
            id: '12_2',
            vid: '~/video/H18B.mp4',
            text: '',

            options: [{
                    text: 'A',
        
                    nextText: '13_2'
                },
                {
                    text: 'B',
                    nextText: 13
                },
                {
                    text: 'C',
                    nextText: '14_2'
                },
            ]
        },
        {
            id: '12_3',
            vid: '~/video/H19B.mp4',
            text: '',

            options: [{
                    text: 'How can Sam overcome Anxiety',
        
                    nextText: 13
                },
            ]
        },
        {
            id: '13_2',
            vid: '~/video/H14.mp4',
            text: '',

            options: [{
                    text: 'A',
                    nextText: 13
                },
                {
                    text: 'B',
                    nextText: '14_2'
                }
                
            ]
        },
        // Boy
        {
            id: 12.1,
            vid: '~/video/A14.mp4',
            text: 'Explanation of question 1 and options to ask more Hamilton',

            options: [{
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
        // Girl
        {
            id: 12.2,
            vid: '~/video/A14.mp4',
            text: 'Explanation of question 1 and options to ask more Annie',

            options: [{
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
            id: 13,
            vid: '~/video/H17.mp4',
            text: 'Explanation of question 2 and option to ask more',
            options: [{
                text: 'Continue',
                nextText: 16
            }]
        },
        {
            id: '13_2',
            vid: '~/video/H15.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16
            }]
        },
        // Boy
        {
            id: 13.1,
            vid: '~/video/H16.mp4',
            text: '',
            options: [{
                text: 'Why does Sam have anxiety?',
                nextText: '13_2',
            },
            {
                text: 'Why is a Raven like a writing desk?',
                nextText: 18.1  
            }, 
        ]
        },
        // Girl
        {
            id: 13.02,
            vid: '~/video/A16.mp4',
            text: '',
            options: [{
                text: 'Why does same have anxiety',
                nextText: 16.01
            },
            {
                text: 'Why is a Raven like a writing desk?',
                nextText: 18.1
            }
        ]
        },
        {
            id: 13.2,
            vid: '~/video/A17.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16.1
            }]
        },
        // Boy
        {
            id: 14,
            vid: '~/video/H18A.mp4',
            text: '',
            options: [{
                    text: 'Try Again',

                    nextText: '12_2'
                },
            ]
        },
        {
            id: '14_2',
            vid: '~/video/H18A.mp4',
            text: '',
            options: [{
                    text: 'Try Again',

                    nextText: '12_3'
                },
            ]
        },
        // Girl
        {
            id: 14.1,
            vid: '~/video/A18.mp4',
            text: 'Game Over',
            options: [{
                    text: 'Why does Sam have anxiety? Annie',

                    nextText: 12.2
                },
                {
                    text: 'How can sam overcome Anxiety, Annie',

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
            vid: '~/video/',
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
            vid: '~/video/A18A.mp4',
            text: 'Game Over',
            options: [{
                    text: 'Try Again',
                    nextText: 'retry'
                }

            ]
        },
        // Boy
        {
            id: 15,
            vid: '~/video/H19A.mp4',
            text: '',
            options: [{
                    text: 'Try Again',
                    nextText: '12_2'
                }

            ]
        },
        // Girl
        {
            id: 15.1,
            vid: '~/video/A19A.mp4',
            text: '',
            options: [{
                    text: 'Try Again',
                    nextText: 'retry_02'
                }

            ]
        },
        // Boy
        {
            id: 16,
            vid: '~/video/H20.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 17
                }

            ]
        },
        // Girl
        {
            id: 16.01,
            vid: '~/video/A15.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 16.1
                }

            ]
        },
        {
            id: 16.1,
            vid: '~/video/A20.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 17.1
                }

            ]
        },
        // Boy
        {
            id: 17,
            vid: '~/video/',
            text: 'Zombie Apocalypse Scene, no Choices Hamilton',
            options: [{
                text: 'Continue',
                nextText: 19
            }]
        },
        
        // Boy
        {
            id: 19,
            vid: '~/video/',
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
            vid: '~/video/',
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
            vid: '~/video/',
            text: 'Final Scene. Depending on which path the player originally chose they will either focus on a memory of being at Mount Doom or the Ghost Town Boy',
            options: [{
                text: 'Continue',
                nextText: 21
            }]
        },
        {
            id: 21.1,
            vid: '~/video/',
            text: 'Focuses on HEDGEHOG Memory of MT Doom Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 21.2,
            vid: '~/video/',
            text: 'Focuses on BAND OF PACIFICATION Memory of MT Doom Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 21.3,
            vid: '~/video/',
            text: 'Focuses on BUBBLE MACHINE Memory of MT Doom Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 22.1,
            vid: '~/video/',
            text: 'Focuses on HEDGEHOG Memory of Ghost Town Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 22.2,
            vid: '~/video/',
            text: 'Focuses on BAND OF PACIFICATION Memory of Ghost Town Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 22.3,
            vid: '~/video/',
            text: 'Focuses on BUBBLE MACHINE Memory of Ghost Town Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 23,
            vid: '~/video/',
            text: 'END OF GAME Hamilton',
            options: [{
                text: 'RESTART GAME',
                nextText: -1
            }]
        },


        // Girls Final Out Comes
        {
            id: 20.1,
            vid: '~/video/',
            text: 'Final Scene. Depending on which path the player originally chose they will either focus on a memory of being at Mount Doom or the Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 21.12
            }]
        },
        {
            id: 21.12,
            vid: '~/video/',
            text: 'Focuses on HEDGEHOG Memory of MT Doom Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 21.22,
            vid: '~/video/',
            text: 'Focuses on BAND OF PACIFICATION Memory of MT Doom Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 21.31,
            vid: '~/video/',
            text: 'Focuses on BUBBLE MACHINE Memory of MT Doom Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 22.11,
            vid: '~/video/',
            text: 'Focuses on HEDGEHOG Memory of Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 22.21,
            vid: '~/video/',
            text: 'Focuses on BAND OF PACIFICATION Memory of Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 22.31,
            vid: '~/video/',
            text: 'Focuses on BUBBLE MACHINE Memory of Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 23.1,
            vid: '~/video/',
            text: 'END OF GAME as Annie',
            options: [{
                text: 'RESTART GAME',
                nextText: -1
            }]
        },








    ]
const audio_menu = document.getElementById('audio_menu');
const audio = document.getElementById('audio');
const audio_select = document.getElementById('audio_select');
const videoElement = document.getElementById('video');
const autoplay = document.getElementById('video');
const textElement = document.getElementById('text');
const optionButtonsElement = document.getElementById('option-buttons');
var vidNode = 1;
var vidTime = 1000;



var done = false;

var theNode;

function loadVideo(nextNodeId) {
    
    theNode = nextNodeId;
    done = false;
    document.getElementById('video').style.display='block';
    document.getElementById('text').style.display = 'none';
    document.getElementById('option-buttons').style.display = 'none';
    vidTime = vidNode.vidtime;
    Video = vidNode.vid;

}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    //console.log('hello');
    //   event.target.playVideo();
}

var myVar;

// If Video is Playing
videoElement.onplay = function()
{
    console.log('Video Is PLaying');

}
$.fn.SetAutoPlay = function()
{
    autoplay.autoplay = true;
}
$.fn.PlayAudioSelect = function()
{
    audio_select.play();
}
$.fn.PlayAudioMenu = function()
{
    audio_menu.play();
}
$.fn.PlayAudio = function()
{
    audio.play();
}

// Needs Work
$(function()
{
    $('.game_play').click(function()
    {
        $(this).SetAutoPlay();
    })
})

videoElement.onended = function()
{
    clearTimeout(myVar);
    setTimeout(vidTime);
    if (theNode == undefined)
        theNode = 1;
        console.log(theNode);
    showTextNode(theNode);
    done = true;
    if (done == true) 
    {
        $(function(){
            $('.moveUpText').delay(1000).show("slide", {direction: "down" }, "slow");
            $('.moveUpBtn').delay(1000).show("slide", {direction: "up" }, "slow").PlayAudioMenu();

        });
        $('.moveUpBtn').click(function()
        {
           $(this).PlayAudio();
        });
        $('.moveUpBtn').hover(function()
        {
            $(this).PlayAudioSelect();
        })
        
    } 
}


const playing = true;




let state = {}

//////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
function startGame() {
    state = {}
    showVid(12);
}


// 4.00219
function showVid(textNodeIndex) {
    vidNode = textNodes.find(vidNode => vidNode.id === textNodeIndex)
    theNode = vidNode.id;
    console.log(theNode);
    var video =  document.getElementsByTagName('video')[0];
    console.log(video);
    var sources = video.getElementsByTagName('source');
    sources[0].src = vidNode.vid;
    video.load();
    document.getElementById('text').style.display = 'none';
    document.getElementById('option-buttons').style.display = 'none';

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
                const button = document.createElement('button');
                button.innerText = option.text
                button.classList.add('btn');
                button.addEventListener('click', () => selectOption(option));
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
        loadVideo(1);

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