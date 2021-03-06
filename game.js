const textNodes = [{
            id: 1,
            vid: './video/AH1.mp4', // kick-out
            text: '',
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
            vid: './video/A2.mp4',
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
            vid: './video/H2.mp4', // kick-out
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
            vid: './video/H3.mp4', // god-less
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
            vid: './video/A3.mp4', // 2 much 2
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
            text: '',
            vid: './video/H4B.mp4',
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
            vid: './video/H4A.mp4',//C-hat
            text: '',
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
            vid: './video/H5D.mp4',
            text: '',
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
            vid: './video/H5C.mp4',
            text: '',
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
            vid: './video/H5B.mp4',
            text: '',
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
            vid: './video/H5A.mp4',
            text: '',
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
            vid: './video/H6D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_B_F'
            }]
        },
        {
            id: 4.031,
            vid: './video/H6C.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_B_H'
            }]
        },
        {
            id: 4.022,
            vid: './video/H7D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.02
            }]
        },
        {
            id: 4.032,
            vid: './video/H7C.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.002
            }]
        },
        // Boy Cowboy hat
        {
            id: 4.0021,
            vid: './video/H6B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_C_F'
            }]
        },
        {
            id: 4.0022,
            vid: './video/H7B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_GHOST_TOWN_C_F'
            }]
        },
        {
            id: 4.0031,
            vid: './video/H6A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_MT_DOOM_C_H'
            }]
        },
        {
            id: 4.0032,
            vid: './video/H7A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'H_GHOST_TOWN_C_H'
            }]
        },
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        {
            id: 4.019,
            vid: './video/A4B.mp4',
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
                }
            ]
        },
        {
            id: 4.0019,
            vid: './video/A4A.mp4',
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
            vid: './video/A5D.mp4',
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
            vid: './video/A5C.mp4',
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
            vid: './video/A5Bupdated.mp4',
            text: '',
            options: [{
                    text: 'Ghost Town',
                    setState: { ghostTown: true },
                    nextText: 4.002299
                },
                {
                    text: 'Mount Doom',
                    setState: { mountDoom: true },
                    nextText: 'MT_DOOM_C_F'
                }
            ]
        },

        ////////////////////////////
        


        {
            // Still need Correct video for A5B
            // Annie with Cowboy hat and Pig with the fedora
            id: 4.0002299,
            vid: './video/A6B.mp4',
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
            vid: './video/A5A.mp4',
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
            vid: './video/A7A.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 4.00329
                }
            ]
        },
        {
            id: 4.0219,
            vid: './video/A6D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 4.00229
            }]
        },
        {
            id: 4.0319,
            vid: './video/A6C.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_B_H'
            }]
        },
        {
            id: 4.0229,
            vid: './video/A7D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 8.1
            }]
        },
        {
            id: 4.0329,
            vid: './video/A7C.mp4',
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
            vid: './video/A6B.mp4',
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
            vid: './video/A10B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'G_Town_Annie'
            }]
        },
        {
            id: 4.00229,
            vid: './video/A8D.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_C_F_PT_2'
            }]
        },
        {
            id: 4.00319,
            vid: './video/A6A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'MT_DOOM_C_H'
            }]
        },
        {
            id: 4.00329,
            vid: './video/A10A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'G_Town_Annie'
            }]
        },
        // Add Ghost Town Scene Here

        {
            id: 'H_GHOST_TOWN_C_F',
            vid: './video/H10B.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9
                }
            ]
        },
        //////////////////////////////////
        /////////////////////////////////
        /////////////////////////////////
        {
            id: 'H_GHOST_TOWN_C_H',
            vid: './video/H10Abesttry.mp4',
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
            vid: './video/H8A.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        {
            id: 'H_MT_DOOM_C_F',
            vid: './video/H8B.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        {
            id: 'H_MT_DOOM_B_F',
            vid: './video/H8D.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 9.02
                }
            ]
        },
        {
            id: 'H_MT_DOOM_B_H',
            vid: './video/H8C.mp4',
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
            vid: './video/A8A.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 'MT_DOOM_C_F_PT_2'
                }
            ]
        },
        {
            id: 'MT_DOOM_C_F',
            vid: './video/A8B.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 'MT_DOOM_C_F_PT_2'
                }
            ]
        },
        {
            id: 'MT_DOOM_C_F_PT_2',
            vid: './video/A9.mp4',
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
            vid: './video/A8C.mp4',
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
            vid: './video/',
            text: '',
            options: [{
                    text: 'Continue',
    
                    nextText: 9
                }
            ]
        },
        {
            id: 8.02,
            vid: './video/H10D.mp4',
            text: '',
            options: [{
                    text: 'Continue',
    
                    nextText: 9
                }
            ]
        },
        {
            id: 8.002,
            vid: './video/H10C.mp4',
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
            vid: './video/A10D.mp4',
            text: '',
            options: [{
                    text: 'continue',
                    nextText: 'G_Town_Annie'
                }
               
            ]
        },
        {
            id: 8.01,
            vid: './video/A10C.mp4',
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
            vid: './video/A11.mp4',
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
            vid: './video/H11.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        {
            id: 9.02,
            vid: './video/H9.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 11
            }]
        },
        // Girl
        {
            id: 9.1,
            vid: './video/A12.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 11.1
            }]
        },
        {
            id: 11,
            vid: './video/H12.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 11.11
                },
            ]
        },
        {
            id: 11.11,
            vid: './video/H13.mp4',
            text: '',
            options: [{
                    text: 'A',
                    nextText: 12
                },
                {
                    text: 'B',
                    nextText: 13.1
                },
                {
                    text: 'C',
                    nextText: 14
                },
            ]
        },
        // Girl
        {
            id: 11.1,
            vid: './video/A13.mp4',
            text: '',
            options: [{
                    text: 'A',
                    nextText: 12.1
                },
                {
                    text: 'B',
                    nextText: 13.02
                },
                {
                    text: 'C',
                    nextText: 18.1
                }
            ]
        },
        {
            id: 'retry',
            vid: './video/A18B.mp4',
            text: '',
            options: [{
                    text: 'A',
                    nextText: 12.2
                },
                {
                    text: 'B',
                    nextText: 13.02
                },
                {
                    text: 'C',
                    nextText: '18.1retry'
                },
            ]
        },
        {
            id: 'retry_02',
            vid: './video/A19B.mp4',
            text: '',
            options: [
                {
                    text: 'How can Sam overcome anxiety?',
                    nextText: 'final_move'
                },
            ]
        },
        {
            id: 'final_move',
            vid: './video/A17.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16.1
            }]
        },
        // Boy
        {
            id: 12,
            vid: './video/H14.mp4',
            text: '',

            options: [{
                    text: 'A',
        
                    nextText: 13
                },
                {
                    text: 'B',
                    nextText: 14
                },
                {
                    text: 'C',
                    nextText: 15
                },
            ]
        },
        {
            id: '12_2',
            vid: './video/H18B.mp4',
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
            vid: './video/H19B.mp4',
            text: '',

            options: [{
                    text: 'How can Sam overcome Anxiety',
        
                    nextText: 13
                },
            ]
        },
        {
            id: '13_2',
            vid: './video/H14.mp4',
            text: '',

            options: [{
                    text: 'A',
                    nextText: 13
                },
                {
                    text: 'B',
                    nextText: '14_2'
                },
                {
                    text: 'C',
                    nextText: 15
                }

                
            ]
        },
        // Boy
        {
            id: 12.1,
            vid: './video/A14.mp4',
            text: '',

            options: [{
                text: 'A',
    
                nextText: 13.2
            },
            {
                text: 'B',
                nextText: 18.1
            },
            {
                text: 'C',
                nextText: 15.1
            },
        ]
        },
        // Girl
        {
            id: 12.2,
            vid: './video/A14.mp4',
            text: '',

            options: [{
                    text: 'A',
        
                    nextText: 13.2
                },
                {
                    text: 'B',
                    nextText: 18.1
                },
                {
                    text: 'C',
                    nextText: 15.1
                },
            ]
        },
        // Boy
        {
            id: 13,
            vid: './video/H17.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16
            }]
        },
        {
            id: '13_02',
            vid: './video/H15.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16
            }]
        },
        // Boy
        {
            id: 13.1,
            vid: './video/H16.mp4',
            text: '',
            options: [{
                text: 'A',
                nextText: '13_02',
            },
            {
                text: 'B',
                nextText: 18.1  
            }, 
        ]
        },
        // Girl
        {
            id: 13.02,
            vid: './video/A16.mp4',
            text: '',
            options: [{
                text: 'A',
                nextText: 16.01
            },
            {
                text: 'B',
                nextText: 18.1
            }
        ]
        },
        {
            id: 13.2,
            vid: './video/A17.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 16.1
            }]
        },
        // Boy
        {
            id: 14,
            vid: './video/H18A.mp4',
            text: '',
            options: [{
                    text: 'Try Again',

                    nextText: '12_2'
                },
            ]
        },
        {
            id: '14_2',
            vid: './video/H18A.mp4',
            text: '',
            options: [{
                    text: 'Try Again',

                    nextText: '12_3'
                },
            ]
        },
        {
            id: 18.1,
            vid: './video/A18A.mp4',
            text: '',
            options: [{
                    text: 'Try Again',
                    nextText: 'retry'
                }

            ]
        },
        {
            id: '18.1retry',
            vid: './video/A18A.mp4',
            text: '',
            options: [{
                    text: 'Try Again',
                    nextText: 'retry_02'
                }

            ]
        },
        // Boy
        {
            id: 15,
            vid: './video/H19A.mp4',
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
            vid: './video/A19A.mp4',
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
            vid: './video/H20.mp4',
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
            vid: './video/A15.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 16.1
                }

            ]
        },
        {
            id: 16.1,
            vid: './video/A20.mp4',
            text: '',
            options: [{
                    text: 'Continue',
                    nextText: 19.1
                }

            ]
        },
        // Boy
        {
            id: 17,
            vid: './video/H21.mp4',
            text: '',
            options: [
                {
                text: 'Tangle Band of Pacification',
                nextText: '19A' 
                },
                {
                    text: 'Stuffed Hedgehog',
                    nextText: '19B'
                }

            ]   
        },
        
        // Boy
        {
            id: '19A',
            vid: './video/H22B.mp4',
            text: '',
            options: [
                {
                    text: 'Continue',
                    nextText: '20A'
                }
            ]
        },
        {
            id: '19B',
            vid: './video/H22A.mp4',
            text: '',
            options: [
                {
                    text: 'Continue',
                    nextText: '20B'
                }
            ]
        },
        // Girl
        {
            id: 19.1,
            vid: './video/A21.mp4',
            text: '',
            options: [
                {
                    text: 'Band of Pacification',
                    nextText: '20.1A'
                },
                {
                    text: 'Stuffed Hedgehog',
                    nextText: '20.1B'
                }
            ]
        },
        {
            id: '20.1A',
            vid: './video/A22A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'A23A'
            }]
        },
        {
            id: '20.1B',
            vid: './video/A22B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'A23B'
            }]
        },
        {
            id: 'A23A',
            vid: './video/A23A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'FINAL_VID'
            }]
        },
        {
            id: 'A23B',
            vid: './video/A23B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'FINAL_VID'
            }]
        },
        // Boys Final Out Comes
        {
            id: '20A',
            vid: './video/H23A.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'FINAL_VID'
            }]
        },
        {
            id: '20B',
            vid: './video/H23B.mp4',
            text: '',
            options: [{
                text: 'Continue',
                nextText: 'FINAL_VID'
            }]
        },
        {
            id: 'FINAL_VID',
            vid: './video/Ayers.mp4',
            text: '',
            options: [{
                text: 'RESTART GAME',
                nextText: 1
            }]
        },








    ]
const audio_menu = document.getElementById('audio_menu');
const audio = document.getElementById('audio');
const audio_select = document.getElementById('audio_select');
const videoElement = document.getElementById('video');
var autoplay = document.getElementById('video');
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
    $(this).SetAutoPlay();
        console.log("video clicked");
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
    $(videoElement).click(function()
    {
        $(this).SetAutoPlay();
        console.log("video clicked");
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
    showVid(1);
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
    // if (nextTextNodeId == -1) {
    //     startGame();
    //     loadVideo();

    // }
    // state = Object.assign(state, option.setState)

    // if (nextTextNodeId == 20 && state.mountDoomn == true && state.stuffedHedgeHog == true && state.hamilton == true) {
    //     console.log('Mount Doom');
    //     nextTextNodeId = 21.1;
    // } else if (nextTextNodeId == 20 && state.mountDoomn == true && state.bandOfPacification == true && state.hamilton == true) {
    //     console.log('Mount Doom');
    //     nextTextNodeId = 21.2;
    // } else if (nextTextNodeId == 20 && state.mountDoomn == true && state.bubbleMachine == true && state.hamilton == true) {
    //     console.log('Mount Doom');
    //     nextTextNodeId = 21.3;
    // } else if (nextTextNodeId == 20 && state.ghostTown == true && state.stuffedHedgeHog == true && state.hamilton == true) {

    //     console.log('Ghost Town');
    //     nextTextNodeId = 22.1;
    // } else if (nextTextNodeId == 20 && state.ghostTown == true && state.bandOfPacification == true && state.hamilton == true) {

    //     console.log('Ghost Town');
    //     nextTextNodeId = 22.2;
    // } else if (nextTextNodeId == 20 && state.ghostTown == true && state.bubbleMachine == true && state.hamilton == true) {

    //     console.log('Ghost Town');
    //     nextTextNodeId = 22.3;
    // }
    // if (nextTextNodeId == 20.1 && state.mountDoomn == true && state.stuffedHedgeHog == true && state.annie == true) {
    //     console.log('Mount Doom');
    //     nextTextNodeId = 21.12;
    // } else if (nextTextNodeId == 20.1 && state.mountDoomn == true && state.bandOfPacification == true && state.annie == true) {
    //     console.log('Mount Doom');
    //     nextTextNodeId = 21.22;
    // } else if (nextTextNodeId == 20.1 && state.mountDoomn == true && state.bubbleMachine == true && state.annie == true) {
    //     console.log('Mount Doom');
    //     nextTextNodeId = 21.31;
    // } else if (nextTextNodeId == 20.1 && state.ghostTown == true && state.stuffedHedgeHog == true && state.annie == true) {

    //     console.log('Ghost Town');
    //     nextTextNodeId = 22.11;
    // } else if (nextTextNodeId == 20.1 && state.ghostTown == true && state.bandOfPacification == true && state.annie == true) {

    //     console.log('Ghost Town');
    //     nextTextNodeId = 22.21;
    // } else if (nextTextNodeId == 20.1 && state.ghostTown == true && state.bubbleMachine == true && state.annie == true) {

    //     console.log('Ghost Town');
    //     nextTextNodeId = 22.31;
    // } else if (nextTextNodeId == 7.1 && state.cowboyHat == true && state.annie == true) {
    //     nextTextNodeId = 7.2;
    // } else if (nextTextNodeId == 7 && state.cowboyHat == true && state.hamilton == true) {
    //     nextTextNodeId = 7.3;
    // }
    showVid(nextTextNodeId);
}
startGame();