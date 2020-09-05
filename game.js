const textNodes = [{
            id: 1,
            vid: '/home3/yqepxzmy/video2/AH1_1.mp4', // kick-out
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
            vid: '/home3/yqepxzmy/video2/A2_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H2_1.mp4', // kick-out
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
            vid: '/home3/yqepxzmy/video2/H3_1.mp4', // god-less
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
            vid: '/home3/yqepxzmy/video2/A3_1.mp4', // 2 much 2
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
            vid: '/home3/yqepxzmy/video2/H4B_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H4A_1.mp4',//C-hat
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
            vid: '/home3/yqepxzmy/video2/H5D_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H5C_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H5B_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H5A_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H6D_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_B_F'
            }]
        },
        {
            id: 4.031,
            vid: '/home3/yqepxzmy/video2/H6C_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_B_H'
            }]
        },
        {
            id: 4.022,
            vid: '/home3/yqepxzmy/video2/H7D_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.02
            }]
        },
        {
            id: 4.032,
            vid: '/home3/yqepxzmy/video2/H7C_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.002
            }]
        },
        // Boy Cowboy hat
        {
            id: 4.0021,
            vid: '/home3/yqepxzmy/video2/H6B_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_C_F'
            }]
        },
        {
            id: 4.0022,
            vid: '/home3/yqepxzmy/video2/H7B_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_GHOST_TOWN_C_F'
            }]
        },
        {
            id: 4.0031,
            vid: '/home3/yqepxzmy/video2/H6A_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_C_H'
            }]
        },
        {
            id: 4.0032,
            vid: '/home3/yqepxzmy/video2/H7A_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8
            }]
        },
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        {
            id: 4.019,
            vid: '/home3/yqepxzmy/video2/A4B_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A4A_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A5D_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A5C_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/',
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
            vid: '/home3/yqepxzmy/video2/A6B_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A5A_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A7A_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 4.00329
                }
            ]
        },
        {
            id: 4.0219,
            vid: '/home3/yqepxzmy/video2/A6D_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 4.00229
            }]
        },
        {
            id: 4.0319,
            vid: '/home3/yqepxzmy/video2/A6C_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_B_H'
            }]
        },
        {
            id: 4.0229,
            vid: '/home3/yqepxzmy/video2/A7D_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 4.0329,
            vid: '/home3/yqepxzmy/video2/A7C_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A6B_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A10B_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'G_Town_Annie'
            }]
        },
        {
            id: 4.00229,
            vid: '/home3/yqepxzmy/video2/A8D_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_C_F_PT_2'
            }]
        },
        {
            id: 4.00319,
            vid: '/home3/yqepxzmy/video2/A6A_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_C_H'
            }]
        },
        {
            id: 4.00329,
            vid: '/home3/yqepxzmy/video2/A10A_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'G_Town_Annie'
            }]
        },
        // Add Ghost Town Scene Here

        {
            id: 'H_GHOST_TOWN_C_F',
            vid: '/home3/yqepxzmy/video2/H10B_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H8A_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        {
            id: 'H_MT_DOOM_C_F',
            vid: '/home3/yqepxzmy/video2/H8B_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        {
            id: 'H_MT_DOOM_B_F',
            vid: '/home3/yqepxzmy/video2/H8D_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        {
            id: 'H_MT_DOOM_B_H',
            vid: '/home3/yqepxzmy/video2/H8C_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A8A_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.1
                }
            ]
        },
        {
            id: 'MT_DOOM_C_F',
            vid: '/home3/yqepxzmy/video2/A8B_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 'MT_DOOM_C_F_PT_2'
                }
            ]
        },
        {
            id: 'MT_DOOM_C_F_PT_2',
            vid: '/home3/yqepxzmy/video2/A9_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A8C_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 'MT_DOOM_C_F_PT_2'
                }
            ]
        },
        // H10A_1.MP4
        // Still Needs Vid Upload
        {
            id: 8,
            vid: '/home3/yqepxzmy/video2/',
            text: '',
            options: [{
                    text: 'Continue',
    
                    nextText: 9
                }
            ]
        },
        {
            id: 8.02,
            vid: '/home3/yqepxzmy/video2/H10D_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
    
                    nextText: 9
                }
            ]
        },
        {
            id: 8.002,
            vid: '/home3/yqepxzmy/video2/H10C_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A10D_1.mp4',
            text: '',
            options: [{
                    text: 'continue',
                    nextText: 'G_Town_Annie'
                }
               
            ]
        },
        {
            id: 8.01,
            vid: '/home3/yqepxzmy/video2/A10C_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A11_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H11_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        {
            id: 9.02,
            vid: '/home3/yqepxzmy/video2/H9_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        // Girl
        {
            id: 9.1,
            vid: '/home3/yqepxzmy/video2/A12_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 11.1
            }]
        },
        // Boy
        {
            id: 10,
            vid: '/home3/yqepxzmy/video2/',
            text: 'You chose to fight the wolf.Hamilton',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        // Girl
        {
            id: 10.1,
            vid: '/home3/yqepxzmy/video2/',
            text: 'You chose to fight the wolf.Annie',
            options: [{
                text: 'Continue',
                nextText: 11.1
            }]
        },
        // Boy
        {
            id: 11,
            vid: '/home3/yqepxzmy/video2/H12_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 11.11
                },
            ]
        },
        {
            id: 11.11,
            vid: '/home3/yqepxzmy/video2/H13_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A13_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A18B_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A19B_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A17_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16.1
            }]
        },
        // Boy
        {
            id: 12,
            vid: '/home3/yqepxzmy/video2/H14_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H18B_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H19B_1.mp4',
            text: '',

            options: [{
                    text: 'How can Sam overcome Anxiety',
        
                    nextText: 13
                },
            ]
        },
        {
            id: '13_2',
            vid: '/home3/yqepxzmy/video2/H14_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A14_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A14_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H17_1.mp4',
            text: 'Explanation of question 2 and option to ask more',
            options: [{
                text: 'Continue',
                nextText: 16
            }]
        },
        {
            id: '13_2',
            vid: '/home3/yqepxzmy/video2/H15_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16
            }]
        },
        // Boy
        {
            id: 13.1,
            vid: '/home3/yqepxzmy/video2/H16_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A16_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A17_1.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16.1
            }]
        },
        // Boy
        {
            id: 14,
            vid: '/home3/yqepxzmy/video2/H18A_1.mp4',
            text: '',
            options: [{
                    text: 'Try Again',

                    nextText: '12_2'
                },
            ]
        },
        {
            id: '14_2',
            vid: '/home3/yqepxzmy/video2/H18A_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A18_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/',
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
            vid: '/home3/yqepxzmy/video2/A18A_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H19A_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A19A_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/H20_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/A15_1.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 16.1
                }

            ]
        },
        {
            id: 16.1,
            vid: '/home3/yqepxzmy/video2/A20_1.mp4',
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
            vid: '/home3/yqepxzmy/video2/',
            text: 'Zombie Apocalypse Scene, no Choices Hamilton',
            options: [{
                text: 'Continue',
                nextText: 19
            }]
        },
        
        // Boy
        {
            id: 19,
            vid: '/home3/yqepxzmy/video2/',
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
            vid: '/home3/yqepxzmy/video2/',
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
            vid: '/home3/yqepxzmy/video2/',
            text: 'Final Scene. Depending on which path the player originally chose they will either focus on a memory of being at Mount Doom or the Ghost Town Boy',
            options: [{
                text: 'Continue',
                nextText: 21
            }]
        },
        {
            id: 21.1,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on HEDGEHOG Memory of MT Doom Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 21.2,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on BAND OF PACIFICATION Memory of MT Doom Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 21.3,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on BUBBLE MACHINE Memory of MT Doom Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 22.1,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on HEDGEHOG Memory of Ghost Town Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 22.2,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on BAND OF PACIFICATION Memory of Ghost Town Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 22.3,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on BUBBLE MACHINE Memory of Ghost Town Hamilton',
            options: [{
                text: 'Continue',
                nextText: 23
            }]
        },
        {
            id: 23,
            vid: '/home3/yqepxzmy/video2/',
            text: 'END OF GAME Hamilton',
            options: [{
                text: 'RESTART GAME',
                nextText: -1
            }]
        },


        // Girls Final Out Comes
        {
            id: 20.1,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Final Scene. Depending on which path the player originally chose they will either focus on a memory of being at Mount Doom or the Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 21.12
            }]
        },
        {
            id: 21.12,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on HEDGEHOG Memory of MT Doom Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 21.22,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on BAND OF PACIFICATION Memory of MT Doom Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 21.31,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on BUBBLE MACHINE Memory of MT Doom Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 22.11,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on HEDGEHOG Memory of Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 22.21,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on BAND OF PACIFICATION Memory of Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 22.31,
            vid: '/home3/yqepxzmy/video2/',
            text: 'Focuses on BUBBLE MACHINE Memory of Ghost Town Annie',
            options: [{
                text: 'Continue',
                nextText: 23.1
            }]
        },
        {
            id: 23.1,
            vid: '/home3/yqepxzmy/video2/',
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