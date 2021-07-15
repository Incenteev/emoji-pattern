<?php

namespace Incenteev\EmojiPattern;

/**
 * Pattern for matching emojis
 *
 * This file is generated from Unicode Emoji 13.1.
 */
final class EmojiPattern
{
    /**
     * Patterns that match characters in the "Emoji" group. Note that characters in this group are
     * (confusingly) not rendered as Emoji by default. They must be followed by the U+FE0F (variant
     * selector) character to be rendered as Emoji.
     */
    private const EMOJI_PATTERNS = [
        '\\x{0023}', // E0.0   [1] (#️)       number sign
        '\\x{002A}', // E0.0   [1] (*️)       asterisk
        '[\\x{0030}-\\x{0039}]', // E0.0  [10] (0️..9️)    digit zero..digit nine
        '\\x{00A9}', // E0.6   [1] (©️)       copyright
        '\\x{00AE}', // E0.6   [1] (®️)       registered
        '\\x{1F004}', // E0.6   [1] (🀄)       mahjong red dragon
        '\\x{1F0CF}', // E0.6   [1] (🃏)       joker
        '[\\x{1F170}-\\x{1F171}]', // E0.6   [2] (🅰️..🅱️)    A button (blood type)..B button (blood type)
        '[\\x{1F17E}-\\x{1F17F}]', // E0.6   [2] (🅾️..🅿️)    O button (blood type)..P button
        '\\x{1F18E}', // E0.6   [1] (🆎)       AB button (blood type)
        '[\\x{1F191}-\\x{1F19A}]', // E0.6  [10] (🆑..🆚)    CL button..VS button
        '[\\x{1F1E6}-\\x{1F1FF}]', // E0.0  [26] (🇦..🇿)    regional indicator symbol letter a..regional indicator symbol letter z
        '[\\x{1F201}-\\x{1F202}]', // E0.6   [2] (🈁..🈂️)    Japanese “here” button..Japanese “service charge” button
        '\\x{1F21A}', // E0.6   [1] (🈚)       Japanese “free of charge” button
        '\\x{1F22F}', // E0.6   [1] (🈯)       Japanese “reserved” button
        '[\\x{1F232}-\\x{1F23A}]', // E0.6   [9] (🈲..🈺)    Japanese “prohibited” button..Japanese “open for business” button
        '[\\x{1F250}-\\x{1F251}]', // E0.6   [2] (🉐..🉑)    Japanese “bargain” button..Japanese “acceptable” button
        '[\\x{1F300}-\\x{1F30C}]', // E0.6  [13] (🌀..🌌)    cyclone..milky way
        '[\\x{1F30D}-\\x{1F30E}]', // E0.7   [2] (🌍..🌎)    globe showing Europe-Africa..globe showing Americas
        '\\x{1F30F}', // E0.6   [1] (🌏)       globe showing Asia-Australia
        '\\x{1F310}', // E1.0   [1] (🌐)       globe with meridians
        '\\x{1F311}', // E0.6   [1] (🌑)       new moon
        '\\x{1F312}', // E1.0   [1] (🌒)       waxing crescent moon
        '[\\x{1F313}-\\x{1F315}]', // E0.6   [3] (🌓..🌕)    first quarter moon..full moon
        '[\\x{1F316}-\\x{1F318}]', // E1.0   [3] (🌖..🌘)    waning gibbous moon..waning crescent moon
        '\\x{1F319}', // E0.6   [1] (🌙)       crescent moon
        '\\x{1F31A}', // E1.0   [1] (🌚)       new moon face
        '\\x{1F31B}', // E0.6   [1] (🌛)       first quarter moon face
        '\\x{1F31C}', // E0.7   [1] (🌜)       last quarter moon face
        '[\\x{1F31D}-\\x{1F31E}]', // E1.0   [2] (🌝..🌞)    full moon face..sun with face
        '[\\x{1F31F}-\\x{1F320}]', // E0.6   [2] (🌟..🌠)    glowing star..shooting star
        '\\x{1F321}', // E0.7   [1] (🌡️)       thermometer
        '[\\x{1F324}-\\x{1F32C}]', // E0.7   [9] (🌤️..🌬️)    sun behind small cloud..wind face
        '[\\x{1F32D}-\\x{1F32F}]', // E1.0   [3] (🌭..🌯)    hot dog..burrito
        '[\\x{1F330}-\\x{1F331}]', // E0.6   [2] (🌰..🌱)    chestnut..seedling
        '[\\x{1F332}-\\x{1F333}]', // E1.0   [2] (🌲..🌳)    evergreen tree..deciduous tree
        '[\\x{1F334}-\\x{1F335}]', // E0.6   [2] (🌴..🌵)    palm tree..cactus
        '\\x{1F336}', // E0.7   [1] (🌶️)       hot pepper
        '[\\x{1F337}-\\x{1F34A}]', // E0.6  [20] (🌷..🍊)    tulip..tangerine
        '\\x{1F34B}', // E1.0   [1] (🍋)       lemon
        '[\\x{1F34C}-\\x{1F34F}]', // E0.6   [4] (🍌..🍏)    banana..green apple
        '\\x{1F350}', // E1.0   [1] (🍐)       pear
        '[\\x{1F351}-\\x{1F37B}]', // E0.6  [43] (🍑..🍻)    peach..clinking beer mugs
        '\\x{1F37C}', // E1.0   [1] (🍼)       baby bottle
        '\\x{1F37D}', // E0.7   [1] (🍽️)       fork and knife with plate
        '[\\x{1F37E}-\\x{1F37F}]', // E1.0   [2] (🍾..🍿)    bottle with popping cork..popcorn
        '[\\x{1F380}-\\x{1F393}]', // E0.6  [20] (🎀..🎓)    ribbon..graduation cap
        '[\\x{1F396}-\\x{1F397}]', // E0.7   [2] (🎖️..🎗️)    military medal..reminder ribbon
        '[\\x{1F399}-\\x{1F39B}]', // E0.7   [3] (🎙️..🎛️)    studio microphone..control knobs
        '[\\x{1F39E}-\\x{1F39F}]', // E0.7   [2] (🎞️..🎟️)    film frames..admission tickets
        '[\\x{1F3A0}-\\x{1F3C4}]', // E0.6  [37] (🎠..🏄)    carousel horse..person surfing
        '\\x{1F3C5}', // E1.0   [1] (🏅)       sports medal
        '\\x{1F3C6}', // E0.6   [1] (🏆)       trophy
        '\\x{1F3C7}', // E1.0   [1] (🏇)       horse racing
        '\\x{1F3C8}', // E0.6   [1] (🏈)       american football
        '\\x{1F3C9}', // E1.0   [1] (🏉)       rugby football
        '\\x{1F3CA}', // E0.6   [1] (🏊)       person swimming
        '[\\x{1F3CB}-\\x{1F3CE}]', // E0.7   [4] (🏋️..🏎️)    person lifting weights..racing car
        '[\\x{1F3CF}-\\x{1F3D3}]', // E1.0   [5] (🏏..🏓)    cricket game..ping pong
        '[\\x{1F3D4}-\\x{1F3DF}]', // E0.7  [12] (🏔️..🏟️)    snow-capped mountain..stadium
        '[\\x{1F3E0}-\\x{1F3E3}]', // E0.6   [4] (🏠..🏣)    house..Japanese post office
        '\\x{1F3E4}', // E1.0   [1] (🏤)       post office
        '[\\x{1F3E5}-\\x{1F3F0}]', // E0.6  [12] (🏥..🏰)    hospital..castle
        '\\x{1F3F3}', // E0.7   [1] (🏳️)       white flag
        '\\x{1F3F4}', // E1.0   [1] (🏴)       black flag
        '\\x{1F3F5}', // E0.7   [1] (🏵️)       rosette
        '\\x{1F3F7}', // E0.7   [1] (🏷️)       label
        '[\\x{1F3F8}-\\x{1F407}]', // E1.0  [16] (🏸..🐇)    badminton..rabbit
        '\\x{1F408}', // E0.7   [1] (🐈)       cat
        '[\\x{1F409}-\\x{1F40B}]', // E1.0   [3] (🐉..🐋)    dragon..whale
        '[\\x{1F40C}-\\x{1F40E}]', // E0.6   [3] (🐌..🐎)    snail..horse
        '[\\x{1F40F}-\\x{1F410}]', // E1.0   [2] (🐏..🐐)    ram..goat
        '[\\x{1F411}-\\x{1F412}]', // E0.6   [2] (🐑..🐒)    ewe..monkey
        '\\x{1F413}', // E1.0   [1] (🐓)       rooster
        '\\x{1F414}', // E0.6   [1] (🐔)       chicken
        '\\x{1F415}', // E0.7   [1] (🐕)       dog
        '\\x{1F416}', // E1.0   [1] (🐖)       pig
        '[\\x{1F417}-\\x{1F429}]', // E0.6  [19] (🐗..🐩)    boar..poodle
        '\\x{1F42A}', // E1.0   [1] (🐪)       camel
        '[\\x{1F42B}-\\x{1F43E}]', // E0.6  [20] (🐫..🐾)    two-hump camel..paw prints
        '\\x{1F43F}', // E0.7   [1] (🐿️)       chipmunk
        '\\x{1F440}', // E0.6   [1] (👀)       eyes
        '\\x{1F441}', // E0.7   [1] (👁️)       eye
        '[\\x{1F442}-\\x{1F464}]', // E0.6  [35] (👂..👤)    ear..bust in silhouette
        '\\x{1F465}', // E1.0   [1] (👥)       busts in silhouette
        '[\\x{1F466}-\\x{1F46B}]', // E0.6   [6] (👦..👫)    boy..woman and man holding hands
        '[\\x{1F46C}-\\x{1F46D}]', // E1.0   [2] (👬..👭)    men holding hands..women holding hands
        '[\\x{1F46E}-\\x{1F4AC}]', // E0.6  [63] (👮..💬)    police officer..speech balloon
        '\\x{1F4AD}', // E1.0   [1] (💭)       thought balloon
        '[\\x{1F4AE}-\\x{1F4B5}]', // E0.6   [8] (💮..💵)    white flower..dollar banknote
        '[\\x{1F4B6}-\\x{1F4B7}]', // E1.0   [2] (💶..💷)    euro banknote..pound banknote
        '[\\x{1F4B8}-\\x{1F4EB}]', // E0.6  [52] (💸..📫)    money with wings..closed mailbox with raised flag
        '[\\x{1F4EC}-\\x{1F4ED}]', // E0.7   [2] (📬..📭)    open mailbox with raised flag..open mailbox with lowered flag
        '\\x{1F4EE}', // E0.6   [1] (📮)       postbox
        '\\x{1F4EF}', // E1.0   [1] (📯)       postal horn
        '[\\x{1F4F0}-\\x{1F4F4}]', // E0.6   [5] (📰..📴)    newspaper..mobile phone off
        '\\x{1F4F5}', // E1.0   [1] (📵)       no mobile phones
        '[\\x{1F4F6}-\\x{1F4F7}]', // E0.6   [2] (📶..📷)    antenna bars..camera
        '\\x{1F4F8}', // E1.0   [1] (📸)       camera with flash
        '[\\x{1F4F9}-\\x{1F4FC}]', // E0.6   [4] (📹..📼)    video camera..videocassette
        '\\x{1F4FD}', // E0.7   [1] (📽️)       film projector
        '[\\x{1F4FF}-\\x{1F502}]', // E1.0   [4] (📿..🔂)    prayer beads..repeat single button
        '\\x{1F503}', // E0.6   [1] (🔃)       clockwise vertical arrows
        '[\\x{1F504}-\\x{1F507}]', // E1.0   [4] (🔄..🔇)    counterclockwise arrows button..muted speaker
        '\\x{1F508}', // E0.7   [1] (🔈)       speaker low volume
        '\\x{1F509}', // E1.0   [1] (🔉)       speaker medium volume
        '[\\x{1F50A}-\\x{1F514}]', // E0.6  [11] (🔊..🔔)    speaker high volume..bell
        '\\x{1F515}', // E1.0   [1] (🔕)       bell with slash
        '[\\x{1F516}-\\x{1F52B}]', // E0.6  [22] (🔖..🔫)    bookmark..pistol
        '[\\x{1F52C}-\\x{1F52D}]', // E1.0   [2] (🔬..🔭)    microscope..telescope
        '[\\x{1F52E}-\\x{1F53D}]', // E0.6  [16] (🔮..🔽)    crystal ball..downwards button
        '[\\x{1F549}-\\x{1F54A}]', // E0.7   [2] (🕉️..🕊️)    om..dove
        '[\\x{1F54B}-\\x{1F54E}]', // E1.0   [4] (🕋..🕎)    kaaba..menorah
        '[\\x{1F550}-\\x{1F55B}]', // E0.6  [12] (🕐..🕛)    one o’clock..twelve o’clock
        '[\\x{1F55C}-\\x{1F567}]', // E0.7  [12] (🕜..🕧)    one-thirty..twelve-thirty
        '[\\x{1F56F}-\\x{1F570}]', // E0.7   [2] (🕯️..🕰️)    candle..mantelpiece clock
        '[\\x{1F573}-\\x{1F579}]', // E0.7   [7] (🕳️..🕹️)    hole..joystick
        '\\x{1F57A}', // E3.0   [1] (🕺)       man dancing
        '\\x{1F587}', // E0.7   [1] (🖇️)       linked paperclips
        '[\\x{1F58A}-\\x{1F58D}]', // E0.7   [4] (🖊️..🖍️)    pen..crayon
        '\\x{1F590}', // E0.7   [1] (🖐️)       hand with fingers splayed
        '[\\x{1F595}-\\x{1F596}]', // E1.0   [2] (🖕..🖖)    middle finger..vulcan salute
        '\\x{1F5A4}', // E3.0   [1] (🖤)       black heart
        '\\x{1F5A5}', // E0.7   [1] (🖥️)       desktop computer
        '\\x{1F5A8}', // E0.7   [1] (🖨️)       printer
        '[\\x{1F5B1}-\\x{1F5B2}]', // E0.7   [2] (🖱️..🖲️)    computer mouse..trackball
        '\\x{1F5BC}', // E0.7   [1] (🖼️)       framed picture
        '[\\x{1F5C2}-\\x{1F5C4}]', // E0.7   [3] (🗂️..🗄️)    card index dividers..file cabinet
        '[\\x{1F5D1}-\\x{1F5D3}]', // E0.7   [3] (🗑️..🗓️)    wastebasket..spiral calendar
        '[\\x{1F5DC}-\\x{1F5DE}]', // E0.7   [3] (🗜️..🗞️)    clamp..rolled-up newspaper
        '\\x{1F5E1}', // E0.7   [1] (🗡️)       dagger
        '\\x{1F5E3}', // E0.7   [1] (🗣️)       speaking head
        '\\x{1F5E8}', // E2.0   [1] (🗨️)       left speech bubble
        '\\x{1F5EF}', // E0.7   [1] (🗯️)       right anger bubble
        '\\x{1F5F3}', // E0.7   [1] (🗳️)       ballot box with ballot
        '\\x{1F5FA}', // E0.7   [1] (🗺️)       world map
        '[\\x{1F5FB}-\\x{1F5FF}]', // E0.6   [5] (🗻..🗿)    mount fuji..moai
        '\\x{1F600}', // E1.0   [1] (😀)       grinning face
        '[\\x{1F601}-\\x{1F606}]', // E0.6   [6] (😁..😆)    beaming face with smiling eyes..grinning squinting face
        '[\\x{1F607}-\\x{1F608}]', // E1.0   [2] (😇..😈)    smiling face with halo..smiling face with horns
        '[\\x{1F609}-\\x{1F60D}]', // E0.6   [5] (😉..😍)    winking face..smiling face with heart-eyes
        '\\x{1F60E}', // E1.0   [1] (😎)       smiling face with sunglasses
        '\\x{1F60F}', // E0.6   [1] (😏)       smirking face
        '\\x{1F610}', // E0.7   [1] (😐)       neutral face
        '\\x{1F611}', // E1.0   [1] (😑)       expressionless face
        '[\\x{1F612}-\\x{1F614}]', // E0.6   [3] (😒..😔)    unamused face..pensive face
        '\\x{1F615}', // E1.0   [1] (😕)       confused face
        '\\x{1F616}', // E0.6   [1] (😖)       confounded face
        '\\x{1F617}', // E1.0   [1] (😗)       kissing face
        '\\x{1F618}', // E0.6   [1] (😘)       face blowing a kiss
        '\\x{1F619}', // E1.0   [1] (😙)       kissing face with smiling eyes
        '\\x{1F61A}', // E0.6   [1] (😚)       kissing face with closed eyes
        '\\x{1F61B}', // E1.0   [1] (😛)       face with tongue
        '[\\x{1F61C}-\\x{1F61E}]', // E0.6   [3] (😜..😞)    winking face with tongue..disappointed face
        '\\x{1F61F}', // E1.0   [1] (😟)       worried face
        '[\\x{1F620}-\\x{1F625}]', // E0.6   [6] (😠..😥)    angry face..sad but relieved face
        '[\\x{1F626}-\\x{1F627}]', // E1.0   [2] (😦..😧)    frowning face with open mouth..anguished face
        '[\\x{1F628}-\\x{1F62B}]', // E0.6   [4] (😨..😫)    fearful face..tired face
        '\\x{1F62C}', // E1.0   [1] (😬)       grimacing face
        '\\x{1F62D}', // E0.6   [1] (😭)       loudly crying face
        '[\\x{1F62E}-\\x{1F62F}]', // E1.0   [2] (😮..😯)    face with open mouth..hushed face
        '[\\x{1F630}-\\x{1F633}]', // E0.6   [4] (😰..😳)    anxious face with sweat..flushed face
        '\\x{1F634}', // E1.0   [1] (😴)       sleeping face
        '\\x{1F635}', // E0.6   [1] (😵)       dizzy face
        '\\x{1F636}', // E1.0   [1] (😶)       face without mouth
        '[\\x{1F637}-\\x{1F640}]', // E0.6  [10] (😷..🙀)    face with medical mask..weary cat
        '[\\x{1F641}-\\x{1F644}]', // E1.0   [4] (🙁..🙄)    slightly frowning face..face with rolling eyes
        '[\\x{1F645}-\\x{1F64F}]', // E0.6  [11] (🙅..🙏)    person gesturing NO..folded hands
        '\\x{1F680}', // E0.6   [1] (🚀)       rocket
        '[\\x{1F681}-\\x{1F682}]', // E1.0   [2] (🚁..🚂)    helicopter..locomotive
        '[\\x{1F683}-\\x{1F685}]', // E0.6   [3] (🚃..🚅)    railway car..bullet train
        '\\x{1F686}', // E1.0   [1] (🚆)       train
        '\\x{1F687}', // E0.6   [1] (🚇)       metro
        '\\x{1F688}', // E1.0   [1] (🚈)       light rail
        '\\x{1F689}', // E0.6   [1] (🚉)       station
        '[\\x{1F68A}-\\x{1F68B}]', // E1.0   [2] (🚊..🚋)    tram..tram car
        '\\x{1F68C}', // E0.6   [1] (🚌)       bus
        '\\x{1F68D}', // E0.7   [1] (🚍)       oncoming bus
        '\\x{1F68E}', // E1.0   [1] (🚎)       trolleybus
        '\\x{1F68F}', // E0.6   [1] (🚏)       bus stop
        '\\x{1F690}', // E1.0   [1] (🚐)       minibus
        '[\\x{1F691}-\\x{1F693}]', // E0.6   [3] (🚑..🚓)    ambulance..police car
        '\\x{1F694}', // E0.7   [1] (🚔)       oncoming police car
        '\\x{1F695}', // E0.6   [1] (🚕)       taxi
        '\\x{1F696}', // E1.0   [1] (🚖)       oncoming taxi
        '\\x{1F697}', // E0.6   [1] (🚗)       automobile
        '\\x{1F698}', // E0.7   [1] (🚘)       oncoming automobile
        '[\\x{1F699}-\\x{1F69A}]', // E0.6   [2] (🚙..🚚)    sport utility vehicle..delivery truck
        '[\\x{1F69B}-\\x{1F6A1}]', // E1.0   [7] (🚛..🚡)    articulated lorry..aerial tramway
        '\\x{1F6A2}', // E0.6   [1] (🚢)       ship
        '\\x{1F6A3}', // E1.0   [1] (🚣)       person rowing boat
        '[\\x{1F6A4}-\\x{1F6A5}]', // E0.6   [2] (🚤..🚥)    speedboat..horizontal traffic light
        '\\x{1F6A6}', // E1.0   [1] (🚦)       vertical traffic light
        '[\\x{1F6A7}-\\x{1F6AD}]', // E0.6   [7] (🚧..🚭)    construction..no smoking
        '[\\x{1F6AE}-\\x{1F6B1}]', // E1.0   [4] (🚮..🚱)    litter in bin sign..non-potable water
        '\\x{1F6B2}', // E0.6   [1] (🚲)       bicycle
        '[\\x{1F6B3}-\\x{1F6B5}]', // E1.0   [3] (🚳..🚵)    no bicycles..person mountain biking
        '\\x{1F6B6}', // E0.6   [1] (🚶)       person walking
        '[\\x{1F6B7}-\\x{1F6B8}]', // E1.0   [2] (🚷..🚸)    no pedestrians..children crossing
        '[\\x{1F6B9}-\\x{1F6BE}]', // E0.6   [6] (🚹..🚾)    men’s room..water closet
        '\\x{1F6BF}', // E1.0   [1] (🚿)       shower
        '\\x{1F6C0}', // E0.6   [1] (🛀)       person taking bath
        '[\\x{1F6C1}-\\x{1F6C5}]', // E1.0   [5] (🛁..🛅)    bathtub..left luggage
        '\\x{1F6CB}', // E0.7   [1] (🛋️)       couch and lamp
        '\\x{1F6CC}', // E1.0   [1] (🛌)       person in bed
        '[\\x{1F6CD}-\\x{1F6CF}]', // E0.7   [3] (🛍️..🛏️)    shopping bags..bed
        '\\x{1F6D0}', // E1.0   [1] (🛐)       place of worship
        '[\\x{1F6D1}-\\x{1F6D2}]', // E3.0   [2] (🛑..🛒)    stop sign..shopping cart
        '\\x{1F6D5}', // E12.0  [1] (🛕)       hindu temple
        '[\\x{1F6D6}-\\x{1F6D7}]', // E13.0  [2] (🛖..🛗)    hut..elevator
        '[\\x{1F6E0}-\\x{1F6E5}]', // E0.7   [6] (🛠️..🛥️)    hammer and wrench..motor boat
        '\\x{1F6E9}', // E0.7   [1] (🛩️)       small airplane
        '[\\x{1F6EB}-\\x{1F6EC}]', // E1.0   [2] (🛫..🛬)    airplane departure..airplane arrival
        '\\x{1F6F0}', // E0.7   [1] (🛰️)       satellite
        '\\x{1F6F3}', // E0.7   [1] (🛳️)       passenger ship
        '[\\x{1F6F4}-\\x{1F6F6}]', // E3.0   [3] (🛴..🛶)    kick scooter..canoe
        '[\\x{1F6F7}-\\x{1F6F8}]', // E5.0   [2] (🛷..🛸)    sled..flying saucer
        '\\x{1F6F9}', // E11.0  [1] (🛹)       skateboard
        '\\x{1F6FA}', // E12.0  [1] (🛺)       auto rickshaw
        '[\\x{1F6FB}-\\x{1F6FC}]', // E13.0  [2] (🛻..🛼)    pickup truck..roller skate
        '[\\x{1F7E0}-\\x{1F7EB}]', // E12.0 [12] (🟠..🟫)    orange circle..brown square
        '\\x{1F90C}', // E13.0  [1] (🤌)       pinched fingers
        '[\\x{1F90D}-\\x{1F90F}]', // E12.0  [3] (🤍..🤏)    white heart..pinching hand
        '[\\x{1F910}-\\x{1F918}]', // E1.0   [9] (🤐..🤘)    zipper-mouth face..sign of the horns
        '[\\x{1F919}-\\x{1F91E}]', // E3.0   [6] (🤙..🤞)    call me hand..crossed fingers
        '\\x{1F91F}', // E5.0   [1] (🤟)       love-you gesture
        '[\\x{1F920}-\\x{1F927}]', // E3.0   [8] (🤠..🤧)    cowboy hat face..sneezing face
        '[\\x{1F928}-\\x{1F92F}]', // E5.0   [8] (🤨..🤯)    face with raised eyebrow..exploding head
        '\\x{1F930}', // E3.0   [1] (🤰)       pregnant woman
        '[\\x{1F931}-\\x{1F932}]', // E5.0   [2] (🤱..🤲)    breast-feeding..palms up together
        '[\\x{1F933}-\\x{1F93A}]', // E3.0   [8] (🤳..🤺)    selfie..person fencing
        '[\\x{1F93C}-\\x{1F93E}]', // E3.0   [3] (🤼..🤾)    people wrestling..person playing handball
        '\\x{1F93F}', // E12.0  [1] (🤿)       diving mask
        '[\\x{1F940}-\\x{1F945}]', // E3.0   [6] (🥀..🥅)    wilted flower..goal net
        '[\\x{1F947}-\\x{1F94B}]', // E3.0   [5] (🥇..🥋)    1st place medal..martial arts uniform
        '\\x{1F94C}', // E5.0   [1] (🥌)       curling stone
        '[\\x{1F94D}-\\x{1F94F}]', // E11.0  [3] (🥍..🥏)    lacrosse..flying disc
        '[\\x{1F950}-\\x{1F95E}]', // E3.0  [15] (🥐..🥞)    croissant..pancakes
        '[\\x{1F95F}-\\x{1F96B}]', // E5.0  [13] (🥟..🥫)    dumpling..canned food
        '[\\x{1F96C}-\\x{1F970}]', // E11.0  [5] (🥬..🥰)    leafy green..smiling face with hearts
        '\\x{1F971}', // E12.0  [1] (🥱)       yawning face
        '\\x{1F972}', // E13.0  [1] (🥲)       smiling face with tear
        '[\\x{1F973}-\\x{1F976}]', // E11.0  [4] (🥳..🥶)    partying face..cold face
        '[\\x{1F977}-\\x{1F978}]', // E13.0  [2] (🥷..🥸)    ninja..disguised face
        '\\x{1F97A}', // E11.0  [1] (🥺)       pleading face
        '\\x{1F97B}', // E12.0  [1] (🥻)       sari
        '[\\x{1F97C}-\\x{1F97F}]', // E11.0  [4] (🥼..🥿)    lab coat..flat shoe
        '[\\x{1F980}-\\x{1F984}]', // E1.0   [5] (🦀..🦄)    crab..unicorn
        '[\\x{1F985}-\\x{1F991}]', // E3.0  [13] (🦅..🦑)    eagle..squid
        '[\\x{1F992}-\\x{1F997}]', // E5.0   [6] (🦒..🦗)    giraffe..cricket
        '[\\x{1F998}-\\x{1F9A2}]', // E11.0 [11] (🦘..🦢)    kangaroo..swan
        '[\\x{1F9A3}-\\x{1F9A4}]', // E13.0  [2] (🦣..🦤)    mammoth..dodo
        '[\\x{1F9A5}-\\x{1F9AA}]', // E12.0  [6] (🦥..🦪)    sloth..oyster
        '[\\x{1F9AB}-\\x{1F9AD}]', // E13.0  [3] (🦫..🦭)    beaver..seal
        '[\\x{1F9AE}-\\x{1F9AF}]', // E12.0  [2] (🦮..🦯)    guide dog..white cane
        '[\\x{1F9B0}-\\x{1F9B9}]', // E11.0 [10] (🦰..🦹)    red hair..supervillain
        '[\\x{1F9BA}-\\x{1F9BF}]', // E12.0  [6] (🦺..🦿)    safety vest..mechanical leg
        '\\x{1F9C0}', // E1.0   [1] (🧀)       cheese wedge
        '[\\x{1F9C1}-\\x{1F9C2}]', // E11.0  [2] (🧁..🧂)    cupcake..salt
        '[\\x{1F9C3}-\\x{1F9CA}]', // E12.0  [8] (🧃..🧊)    beverage box..ice
        '\\x{1F9CB}', // E13.0  [1] (🧋)       bubble tea
        '[\\x{1F9CD}-\\x{1F9CF}]', // E12.0  [3] (🧍..🧏)    person standing..deaf person
        '[\\x{1F9D0}-\\x{1F9E6}]', // E5.0  [23] (🧐..🧦)    face with monocle..socks
        '[\\x{1F9E7}-\\x{1F9FF}]', // E11.0 [25] (🧧..🧿)    red envelope..nazar amulet
        '[\\x{1FA70}-\\x{1FA73}]', // E12.0  [4] (🩰..🩳)    ballet shoes..shorts
        '\\x{1FA74}', // E13.0  [1] (🩴)       thong sandal
        '[\\x{1FA78}-\\x{1FA7A}]', // E12.0  [3] (🩸..🩺)    drop of blood..stethoscope
        '[\\x{1FA80}-\\x{1FA82}]', // E12.0  [3] (🪀..🪂)    yo-yo..parachute
        '[\\x{1FA83}-\\x{1FA86}]', // E13.0  [4] (🪃..🪆)    boomerang..nesting dolls
        '[\\x{1FA90}-\\x{1FA95}]', // E12.0  [6] (🪐..🪕)    ringed planet..banjo
        '[\\x{1FA96}-\\x{1FAA8}]', // E13.0 [19] (🪖..🪨)    military helmet..rock
        '[\\x{1FAB0}-\\x{1FAB6}]', // E13.0  [7] (🪰..🪶)    fly..feather
        '[\\x{1FAC0}-\\x{1FAC2}]', // E13.0  [3] (🫀..🫂)    anatomical heart..people hugging
        '[\\x{1FAD0}-\\x{1FAD6}]', // E13.0  [7] (🫐..🫖)    blueberries..teapot
        '\\x{203C}', // E0.6   [1] (‼️)       double exclamation mark
        '\\x{2049}', // E0.6   [1] (⁉️)       exclamation question mark
        '\\x{2122}', // E0.6   [1] (™️)       trade mark
        '\\x{2139}', // E0.6   [1] (ℹ️)       information
        '[\\x{2194}-\\x{2199}]', // E0.6   [6] (↔️..↙️)    left-right arrow..down-left arrow
        '[\\x{21A9}-\\x{21AA}]', // E0.6   [2] (↩️..↪️)    right arrow curving left..left arrow curving right
        '[\\x{231A}-\\x{231B}]', // E0.6   [2] (⌚..⌛)    watch..hourglass done
        '\\x{2328}', // E1.0   [1] (⌨️)       keyboard
        '\\x{23CF}', // E1.0   [1] (⏏️)       eject button
        '[\\x{23E9}-\\x{23EC}]', // E0.6   [4] (⏩..⏬)    fast-forward button..fast down button
        '[\\x{23ED}-\\x{23EE}]', // E0.7   [2] (⏭️..⏮️)    next track button..last track button
        '\\x{23EF}', // E1.0   [1] (⏯️)       play or pause button
        '\\x{23F0}', // E0.6   [1] (⏰)       alarm clock
        '[\\x{23F1}-\\x{23F2}]', // E1.0   [2] (⏱️..⏲️)    stopwatch..timer clock
        '\\x{23F3}', // E0.6   [1] (⏳)       hourglass not done
        '[\\x{23F8}-\\x{23FA}]', // E0.7   [3] (⏸️..⏺️)    pause button..record button
        '\\x{24C2}', // E0.6   [1] (Ⓜ️)       circled M
        '[\\x{25AA}-\\x{25AB}]', // E0.6   [2] (▪️..▫️)    black small square..white small square
        '\\x{25B6}', // E0.6   [1] (▶️)       play button
        '\\x{25C0}', // E0.6   [1] (◀️)       reverse button
        '[\\x{25FB}-\\x{25FE}]', // E0.6   [4] (◻️..◾)    white medium square..black medium-small square
        '[\\x{2600}-\\x{2601}]', // E0.6   [2] (☀️..☁️)    sun..cloud
        '[\\x{2602}-\\x{2603}]', // E0.7   [2] (☂️..☃️)    umbrella..snowman
        '\\x{2604}', // E1.0   [1] (☄️)       comet
        '\\x{260E}', // E0.6   [1] (☎️)       telephone
        '\\x{2611}', // E0.6   [1] (☑️)       check box with check
        '[\\x{2614}-\\x{2615}]', // E0.6   [2] (☔..☕)    umbrella with rain drops..hot beverage
        '\\x{2618}', // E1.0   [1] (☘️)       shamrock
        '\\x{261D}', // E0.6   [1] (☝️)       index pointing up
        '\\x{2620}', // E1.0   [1] (☠️)       skull and crossbones
        '[\\x{2622}-\\x{2623}]', // E1.0   [2] (☢️..☣️)    radioactive..biohazard
        '\\x{2626}', // E1.0   [1] (☦️)       orthodox cross
        '\\x{262A}', // E0.7   [1] (☪️)       star and crescent
        '\\x{262E}', // E1.0   [1] (☮️)       peace symbol
        '\\x{262F}', // E0.7   [1] (☯️)       yin yang
        '[\\x{2638}-\\x{2639}]', // E0.7   [2] (☸️..☹️)    wheel of dharma..frowning face
        '\\x{263A}', // E0.6   [1] (☺️)       smiling face
        '\\x{2640}', // E4.0   [1] (♀️)       female sign
        '\\x{2642}', // E4.0   [1] (♂️)       male sign
        '[\\x{2648}-\\x{2653}]', // E0.6  [12] (♈..♓)    Aries..Pisces
        '\\x{265F}', // E11.0  [1] (♟️)       chess pawn
        '\\x{2660}', // E0.6   [1] (♠️)       spade suit
        '\\x{2663}', // E0.6   [1] (♣️)       club suit
        '[\\x{2665}-\\x{2666}]', // E0.6   [2] (♥️..♦️)    heart suit..diamond suit
        '\\x{2668}', // E0.6   [1] (♨️)       hot springs
        '\\x{267B}', // E0.6   [1] (♻️)       recycling symbol
        '\\x{267E}', // E11.0  [1] (♾️)       infinity
        '\\x{267F}', // E0.6   [1] (♿)       wheelchair symbol
        '\\x{2692}', // E1.0   [1] (⚒️)       hammer and pick
        '\\x{2693}', // E0.6   [1] (⚓)       anchor
        '\\x{2694}', // E1.0   [1] (⚔️)       crossed swords
        '\\x{2695}', // E4.0   [1] (⚕️)       medical symbol
        '[\\x{2696}-\\x{2697}]', // E1.0   [2] (⚖️..⚗️)    balance scale..alembic
        '\\x{2699}', // E1.0   [1] (⚙️)       gear
        '[\\x{269B}-\\x{269C}]', // E1.0   [2] (⚛️..⚜️)    atom symbol..fleur-de-lis
        '[\\x{26A0}-\\x{26A1}]', // E0.6   [2] (⚠️..⚡)    warning..high voltage
        '\\x{26A7}', // E13.0  [1] (⚧️)       transgender symbol
        '[\\x{26AA}-\\x{26AB}]', // E0.6   [2] (⚪..⚫)    white circle..black circle
        '[\\x{26B0}-\\x{26B1}]', // E1.0   [2] (⚰️..⚱️)    coffin..funeral urn
        '[\\x{26BD}-\\x{26BE}]', // E0.6   [2] (⚽..⚾)    soccer ball..baseball
        '[\\x{26C4}-\\x{26C5}]', // E0.6   [2] (⛄..⛅)    snowman without snow..sun behind cloud
        '\\x{26C8}', // E0.7   [1] (⛈️)       cloud with lightning and rain
        '\\x{26CE}', // E0.6   [1] (⛎)       Ophiuchus
        '\\x{26CF}', // E0.7   [1] (⛏️)       pick
        '\\x{26D1}', // E0.7   [1] (⛑️)       rescue worker’s helmet
        '\\x{26D3}', // E0.7   [1] (⛓️)       chains
        '\\x{26D4}', // E0.6   [1] (⛔)       no entry
        '\\x{26E9}', // E0.7   [1] (⛩️)       shinto shrine
        '\\x{26EA}', // E0.6   [1] (⛪)       church
        '[\\x{26F0}-\\x{26F1}]', // E0.7   [2] (⛰️..⛱️)    mountain..umbrella on ground
        '[\\x{26F2}-\\x{26F3}]', // E0.6   [2] (⛲..⛳)    fountain..flag in hole
        '\\x{26F4}', // E0.7   [1] (⛴️)       ferry
        '\\x{26F5}', // E0.6   [1] (⛵)       sailboat
        '[\\x{26F7}-\\x{26F9}]', // E0.7   [3] (⛷️..⛹️)    skier..person bouncing ball
        '\\x{26FA}', // E0.6   [1] (⛺)       tent
        '\\x{26FD}', // E0.6   [1] (⛽)       fuel pump
        '\\x{2702}', // E0.6   [1] (✂️)       scissors
        '\\x{2705}', // E0.6   [1] (✅)       check mark button
        '[\\x{2708}-\\x{270C}]', // E0.6   [5] (✈️..✌️)    airplane..victory hand
        '\\x{270D}', // E0.7   [1] (✍️)       writing hand
        '\\x{270F}', // E0.6   [1] (✏️)       pencil
        '\\x{2712}', // E0.6   [1] (✒️)       black nib
        '\\x{2714}', // E0.6   [1] (✔️)       check mark
        '\\x{2716}', // E0.6   [1] (✖️)       multiply
        '\\x{271D}', // E0.7   [1] (✝️)       latin cross
        '\\x{2721}', // E0.7   [1] (✡️)       star of David
        '\\x{2728}', // E0.6   [1] (✨)       sparkles
        '[\\x{2733}-\\x{2734}]', // E0.6   [2] (✳️..✴️)    eight-spoked asterisk..eight-pointed star
        '\\x{2744}', // E0.6   [1] (❄️)       snowflake
        '\\x{2747}', // E0.6   [1] (❇️)       sparkle
        '\\x{274C}', // E0.6   [1] (❌)       cross mark
        '\\x{274E}', // E0.6   [1] (❎)       cross mark button
        '[\\x{2753}-\\x{2755}]', // E0.6   [3] (❓..❕)    question mark..white exclamation mark
        '\\x{2757}', // E0.6   [1] (❗)       exclamation mark
        '\\x{2763}', // E1.0   [1] (❣️)       heart exclamation
        '\\x{2764}', // E0.6   [1] (❤️)       red heart
        '[\\x{2795}-\\x{2797}]', // E0.6   [3] (➕..➗)    plus..divide
        '\\x{27A1}', // E0.6   [1] (➡️)       right arrow
        '\\x{27B0}', // E0.6   [1] (➰)       curly loop
        '\\x{27BF}', // E1.0   [1] (➿)       double curly loop
        '[\\x{2934}-\\x{2935}]', // E0.6   [2] (⤴️..⤵️)    right arrow curving up..right arrow curving down
        '[\\x{2B05}-\\x{2B07}]', // E0.6   [3] (⬅️..⬇️)    left arrow..down arrow
        '[\\x{2B1B}-\\x{2B1C}]', // E0.6   [2] (⬛..⬜)    black large square..white large square
        '\\x{2B50}', // E0.6   [1] (⭐)       star
        '\\x{2B55}', // E0.6   [1] (⭕)       hollow red circle
        '\\x{3030}', // E0.6   [1] (〰️)       wavy dash
        '\\x{303D}', // E0.6   [1] (〽️)       part alternation mark
        '\\x{3297}', // E0.6   [1] (㊗️)       Japanese “congratulations” button
        '\\x{3299}', // E0.6   [1] (㊙️)       Japanese “secret” button
    ];

    /**
     * Patterns that match characters in the "Emoji Presentation" group. These characters are
     * (rendered as Emoji by default, and do not need a variant selector, unlike `EMOJI_PATTERNS`.
     */
    private const EMOJI_PRESENTATION_PATTERNS = [
        '\\x{1F004}', // E0.6   [1] (🀄)       mahjong red dragon
        '\\x{1F0CF}', // E0.6   [1] (🃏)       joker
        '\\x{1F18E}', // E0.6   [1] (🆎)       AB button (blood type)
        '[\\x{1F191}-\\x{1F19A}]', // E0.6  [10] (🆑..🆚)    CL button..VS button
        '[\\x{1F1E6}-\\x{1F1FF}]', // E0.0  [26] (🇦..🇿)    regional indicator symbol letter a..regional indicator symbol letter z
        '\\x{1F201}', // E0.6   [1] (🈁)       Japanese “here” button
        '\\x{1F21A}', // E0.6   [1] (🈚)       Japanese “free of charge” button
        '\\x{1F22F}', // E0.6   [1] (🈯)       Japanese “reserved” button
        '[\\x{1F232}-\\x{1F236}]', // E0.6   [5] (🈲..🈶)    Japanese “prohibited” button..Japanese “not free of charge” button
        '[\\x{1F238}-\\x{1F23A}]', // E0.6   [3] (🈸..🈺)    Japanese “application” button..Japanese “open for business” button
        '[\\x{1F250}-\\x{1F251}]', // E0.6   [2] (🉐..🉑)    Japanese “bargain” button..Japanese “acceptable” button
        '[\\x{1F300}-\\x{1F30C}]', // E0.6  [13] (🌀..🌌)    cyclone..milky way
        '[\\x{1F30D}-\\x{1F30E}]', // E0.7   [2] (🌍..🌎)    globe showing Europe-Africa..globe showing Americas
        '\\x{1F30F}', // E0.6   [1] (🌏)       globe showing Asia-Australia
        '\\x{1F310}', // E1.0   [1] (🌐)       globe with meridians
        '\\x{1F311}', // E0.6   [1] (🌑)       new moon
        '\\x{1F312}', // E1.0   [1] (🌒)       waxing crescent moon
        '[\\x{1F313}-\\x{1F315}]', // E0.6   [3] (🌓..🌕)    first quarter moon..full moon
        '[\\x{1F316}-\\x{1F318}]', // E1.0   [3] (🌖..🌘)    waning gibbous moon..waning crescent moon
        '\\x{1F319}', // E0.6   [1] (🌙)       crescent moon
        '\\x{1F31A}', // E1.0   [1] (🌚)       new moon face
        '\\x{1F31B}', // E0.6   [1] (🌛)       first quarter moon face
        '\\x{1F31C}', // E0.7   [1] (🌜)       last quarter moon face
        '[\\x{1F31D}-\\x{1F31E}]', // E1.0   [2] (🌝..🌞)    full moon face..sun with face
        '[\\x{1F31F}-\\x{1F320}]', // E0.6   [2] (🌟..🌠)    glowing star..shooting star
        '[\\x{1F32D}-\\x{1F32F}]', // E1.0   [3] (🌭..🌯)    hot dog..burrito
        '[\\x{1F330}-\\x{1F331}]', // E0.6   [2] (🌰..🌱)    chestnut..seedling
        '[\\x{1F332}-\\x{1F333}]', // E1.0   [2] (🌲..🌳)    evergreen tree..deciduous tree
        '[\\x{1F334}-\\x{1F335}]', // E0.6   [2] (🌴..🌵)    palm tree..cactus
        '[\\x{1F337}-\\x{1F34A}]', // E0.6  [20] (🌷..🍊)    tulip..tangerine
        '\\x{1F34B}', // E1.0   [1] (🍋)       lemon
        '[\\x{1F34C}-\\x{1F34F}]', // E0.6   [4] (🍌..🍏)    banana..green apple
        '\\x{1F350}', // E1.0   [1] (🍐)       pear
        '[\\x{1F351}-\\x{1F37B}]', // E0.6  [43] (🍑..🍻)    peach..clinking beer mugs
        '\\x{1F37C}', // E1.0   [1] (🍼)       baby bottle
        '[\\x{1F37E}-\\x{1F37F}]', // E1.0   [2] (🍾..🍿)    bottle with popping cork..popcorn
        '[\\x{1F380}-\\x{1F393}]', // E0.6  [20] (🎀..🎓)    ribbon..graduation cap
        '[\\x{1F3A0}-\\x{1F3C4}]', // E0.6  [37] (🎠..🏄)    carousel horse..person surfing
        '\\x{1F3C5}', // E1.0   [1] (🏅)       sports medal
        '\\x{1F3C6}', // E0.6   [1] (🏆)       trophy
        '\\x{1F3C7}', // E1.0   [1] (🏇)       horse racing
        '\\x{1F3C8}', // E0.6   [1] (🏈)       american football
        '\\x{1F3C9}', // E1.0   [1] (🏉)       rugby football
        '\\x{1F3CA}', // E0.6   [1] (🏊)       person swimming
        '[\\x{1F3CF}-\\x{1F3D3}]', // E1.0   [5] (🏏..🏓)    cricket game..ping pong
        '[\\x{1F3E0}-\\x{1F3E3}]', // E0.6   [4] (🏠..🏣)    house..Japanese post office
        '\\x{1F3E4}', // E1.0   [1] (🏤)       post office
        '[\\x{1F3E5}-\\x{1F3F0}]', // E0.6  [12] (🏥..🏰)    hospital..castle
        '\\x{1F3F4}', // E1.0   [1] (🏴)       black flag
        '[\\x{1F3F8}-\\x{1F407}]', // E1.0  [16] (🏸..🐇)    badminton..rabbit
        '\\x{1F408}', // E0.7   [1] (🐈)       cat
        '[\\x{1F409}-\\x{1F40B}]', // E1.0   [3] (🐉..🐋)    dragon..whale
        '[\\x{1F40C}-\\x{1F40E}]', // E0.6   [3] (🐌..🐎)    snail..horse
        '[\\x{1F40F}-\\x{1F410}]', // E1.0   [2] (🐏..🐐)    ram..goat
        '[\\x{1F411}-\\x{1F412}]', // E0.6   [2] (🐑..🐒)    ewe..monkey
        '\\x{1F413}', // E1.0   [1] (🐓)       rooster
        '\\x{1F414}', // E0.6   [1] (🐔)       chicken
        '\\x{1F415}', // E0.7   [1] (🐕)       dog
        '\\x{1F416}', // E1.0   [1] (🐖)       pig
        '[\\x{1F417}-\\x{1F429}]', // E0.6  [19] (🐗..🐩)    boar..poodle
        '\\x{1F42A}', // E1.0   [1] (🐪)       camel
        '[\\x{1F42B}-\\x{1F43E}]', // E0.6  [20] (🐫..🐾)    two-hump camel..paw prints
        '\\x{1F440}', // E0.6   [1] (👀)       eyes
        '[\\x{1F442}-\\x{1F464}]', // E0.6  [35] (👂..👤)    ear..bust in silhouette
        '\\x{1F465}', // E1.0   [1] (👥)       busts in silhouette
        '[\\x{1F466}-\\x{1F46B}]', // E0.6   [6] (👦..👫)    boy..woman and man holding hands
        '[\\x{1F46C}-\\x{1F46D}]', // E1.0   [2] (👬..👭)    men holding hands..women holding hands
        '[\\x{1F46E}-\\x{1F4AC}]', // E0.6  [63] (👮..💬)    police officer..speech balloon
        '\\x{1F4AD}', // E1.0   [1] (💭)       thought balloon
        '[\\x{1F4AE}-\\x{1F4B5}]', // E0.6   [8] (💮..💵)    white flower..dollar banknote
        '[\\x{1F4B6}-\\x{1F4B7}]', // E1.0   [2] (💶..💷)    euro banknote..pound banknote
        '[\\x{1F4B8}-\\x{1F4EB}]', // E0.6  [52] (💸..📫)    money with wings..closed mailbox with raised flag
        '[\\x{1F4EC}-\\x{1F4ED}]', // E0.7   [2] (📬..📭)    open mailbox with raised flag..open mailbox with lowered flag
        '\\x{1F4EE}', // E0.6   [1] (📮)       postbox
        '\\x{1F4EF}', // E1.0   [1] (📯)       postal horn
        '[\\x{1F4F0}-\\x{1F4F4}]', // E0.6   [5] (📰..📴)    newspaper..mobile phone off
        '\\x{1F4F5}', // E1.0   [1] (📵)       no mobile phones
        '[\\x{1F4F6}-\\x{1F4F7}]', // E0.6   [2] (📶..📷)    antenna bars..camera
        '\\x{1F4F8}', // E1.0   [1] (📸)       camera with flash
        '[\\x{1F4F9}-\\x{1F4FC}]', // E0.6   [4] (📹..📼)    video camera..videocassette
        '[\\x{1F4FF}-\\x{1F502}]', // E1.0   [4] (📿..🔂)    prayer beads..repeat single button
        '\\x{1F503}', // E0.6   [1] (🔃)       clockwise vertical arrows
        '[\\x{1F504}-\\x{1F507}]', // E1.0   [4] (🔄..🔇)    counterclockwise arrows button..muted speaker
        '\\x{1F508}', // E0.7   [1] (🔈)       speaker low volume
        '\\x{1F509}', // E1.0   [1] (🔉)       speaker medium volume
        '[\\x{1F50A}-\\x{1F514}]', // E0.6  [11] (🔊..🔔)    speaker high volume..bell
        '\\x{1F515}', // E1.0   [1] (🔕)       bell with slash
        '[\\x{1F516}-\\x{1F52B}]', // E0.6  [22] (🔖..🔫)    bookmark..pistol
        '[\\x{1F52C}-\\x{1F52D}]', // E1.0   [2] (🔬..🔭)    microscope..telescope
        '[\\x{1F52E}-\\x{1F53D}]', // E0.6  [16] (🔮..🔽)    crystal ball..downwards button
        '[\\x{1F54B}-\\x{1F54E}]', // E1.0   [4] (🕋..🕎)    kaaba..menorah
        '[\\x{1F550}-\\x{1F55B}]', // E0.6  [12] (🕐..🕛)    one o’clock..twelve o’clock
        '[\\x{1F55C}-\\x{1F567}]', // E0.7  [12] (🕜..🕧)    one-thirty..twelve-thirty
        '\\x{1F57A}', // E3.0   [1] (🕺)       man dancing
        '[\\x{1F595}-\\x{1F596}]', // E1.0   [2] (🖕..🖖)    middle finger..vulcan salute
        '\\x{1F5A4}', // E3.0   [1] (🖤)       black heart
        '[\\x{1F5FB}-\\x{1F5FF}]', // E0.6   [5] (🗻..🗿)    mount fuji..moai
        '\\x{1F600}', // E1.0   [1] (😀)       grinning face
        '[\\x{1F601}-\\x{1F606}]', // E0.6   [6] (😁..😆)    beaming face with smiling eyes..grinning squinting face
        '[\\x{1F607}-\\x{1F608}]', // E1.0   [2] (😇..😈)    smiling face with halo..smiling face with horns
        '[\\x{1F609}-\\x{1F60D}]', // E0.6   [5] (😉..😍)    winking face..smiling face with heart-eyes
        '\\x{1F60E}', // E1.0   [1] (😎)       smiling face with sunglasses
        '\\x{1F60F}', // E0.6   [1] (😏)       smirking face
        '\\x{1F610}', // E0.7   [1] (😐)       neutral face
        '\\x{1F611}', // E1.0   [1] (😑)       expressionless face
        '[\\x{1F612}-\\x{1F614}]', // E0.6   [3] (😒..😔)    unamused face..pensive face
        '\\x{1F615}', // E1.0   [1] (😕)       confused face
        '\\x{1F616}', // E0.6   [1] (😖)       confounded face
        '\\x{1F617}', // E1.0   [1] (😗)       kissing face
        '\\x{1F618}', // E0.6   [1] (😘)       face blowing a kiss
        '\\x{1F619}', // E1.0   [1] (😙)       kissing face with smiling eyes
        '\\x{1F61A}', // E0.6   [1] (😚)       kissing face with closed eyes
        '\\x{1F61B}', // E1.0   [1] (😛)       face with tongue
        '[\\x{1F61C}-\\x{1F61E}]', // E0.6   [3] (😜..😞)    winking face with tongue..disappointed face
        '\\x{1F61F}', // E1.0   [1] (😟)       worried face
        '[\\x{1F620}-\\x{1F625}]', // E0.6   [6] (😠..😥)    angry face..sad but relieved face
        '[\\x{1F626}-\\x{1F627}]', // E1.0   [2] (😦..😧)    frowning face with open mouth..anguished face
        '[\\x{1F628}-\\x{1F62B}]', // E0.6   [4] (😨..😫)    fearful face..tired face
        '\\x{1F62C}', // E1.0   [1] (😬)       grimacing face
        '\\x{1F62D}', // E0.6   [1] (😭)       loudly crying face
        '[\\x{1F62E}-\\x{1F62F}]', // E1.0   [2] (😮..😯)    face with open mouth..hushed face
        '[\\x{1F630}-\\x{1F633}]', // E0.6   [4] (😰..😳)    anxious face with sweat..flushed face
        '\\x{1F634}', // E1.0   [1] (😴)       sleeping face
        '\\x{1F635}', // E0.6   [1] (😵)       dizzy face
        '\\x{1F636}', // E1.0   [1] (😶)       face without mouth
        '[\\x{1F637}-\\x{1F640}]', // E0.6  [10] (😷..🙀)    face with medical mask..weary cat
        '[\\x{1F641}-\\x{1F644}]', // E1.0   [4] (🙁..🙄)    slightly frowning face..face with rolling eyes
        '[\\x{1F645}-\\x{1F64F}]', // E0.6  [11] (🙅..🙏)    person gesturing NO..folded hands
        '\\x{1F680}', // E0.6   [1] (🚀)       rocket
        '[\\x{1F681}-\\x{1F682}]', // E1.0   [2] (🚁..🚂)    helicopter..locomotive
        '[\\x{1F683}-\\x{1F685}]', // E0.6   [3] (🚃..🚅)    railway car..bullet train
        '\\x{1F686}', // E1.0   [1] (🚆)       train
        '\\x{1F687}', // E0.6   [1] (🚇)       metro
        '\\x{1F688}', // E1.0   [1] (🚈)       light rail
        '\\x{1F689}', // E0.6   [1] (🚉)       station
        '[\\x{1F68A}-\\x{1F68B}]', // E1.0   [2] (🚊..🚋)    tram..tram car
        '\\x{1F68C}', // E0.6   [1] (🚌)       bus
        '\\x{1F68D}', // E0.7   [1] (🚍)       oncoming bus
        '\\x{1F68E}', // E1.0   [1] (🚎)       trolleybus
        '\\x{1F68F}', // E0.6   [1] (🚏)       bus stop
        '\\x{1F690}', // E1.0   [1] (🚐)       minibus
        '[\\x{1F691}-\\x{1F693}]', // E0.6   [3] (🚑..🚓)    ambulance..police car
        '\\x{1F694}', // E0.7   [1] (🚔)       oncoming police car
        '\\x{1F695}', // E0.6   [1] (🚕)       taxi
        '\\x{1F696}', // E1.0   [1] (🚖)       oncoming taxi
        '\\x{1F697}', // E0.6   [1] (🚗)       automobile
        '\\x{1F698}', // E0.7   [1] (🚘)       oncoming automobile
        '[\\x{1F699}-\\x{1F69A}]', // E0.6   [2] (🚙..🚚)    sport utility vehicle..delivery truck
        '[\\x{1F69B}-\\x{1F6A1}]', // E1.0   [7] (🚛..🚡)    articulated lorry..aerial tramway
        '\\x{1F6A2}', // E0.6   [1] (🚢)       ship
        '\\x{1F6A3}', // E1.0   [1] (🚣)       person rowing boat
        '[\\x{1F6A4}-\\x{1F6A5}]', // E0.6   [2] (🚤..🚥)    speedboat..horizontal traffic light
        '\\x{1F6A6}', // E1.0   [1] (🚦)       vertical traffic light
        '[\\x{1F6A7}-\\x{1F6AD}]', // E0.6   [7] (🚧..🚭)    construction..no smoking
        '[\\x{1F6AE}-\\x{1F6B1}]', // E1.0   [4] (🚮..🚱)    litter in bin sign..non-potable water
        '\\x{1F6B2}', // E0.6   [1] (🚲)       bicycle
        '[\\x{1F6B3}-\\x{1F6B5}]', // E1.0   [3] (🚳..🚵)    no bicycles..person mountain biking
        '\\x{1F6B6}', // E0.6   [1] (🚶)       person walking
        '[\\x{1F6B7}-\\x{1F6B8}]', // E1.0   [2] (🚷..🚸)    no pedestrians..children crossing
        '[\\x{1F6B9}-\\x{1F6BE}]', // E0.6   [6] (🚹..🚾)    men’s room..water closet
        '\\x{1F6BF}', // E1.0   [1] (🚿)       shower
        '\\x{1F6C0}', // E0.6   [1] (🛀)       person taking bath
        '[\\x{1F6C1}-\\x{1F6C5}]', // E1.0   [5] (🛁..🛅)    bathtub..left luggage
        '\\x{1F6CC}', // E1.0   [1] (🛌)       person in bed
        '\\x{1F6D0}', // E1.0   [1] (🛐)       place of worship
        '[\\x{1F6D1}-\\x{1F6D2}]', // E3.0   [2] (🛑..🛒)    stop sign..shopping cart
        '\\x{1F6D5}', // E12.0  [1] (🛕)       hindu temple
        '[\\x{1F6D6}-\\x{1F6D7}]', // E13.0  [2] (🛖..🛗)    hut..elevator
        '[\\x{1F6EB}-\\x{1F6EC}]', // E1.0   [2] (🛫..🛬)    airplane departure..airplane arrival
        '[\\x{1F6F4}-\\x{1F6F6}]', // E3.0   [3] (🛴..🛶)    kick scooter..canoe
        '[\\x{1F6F7}-\\x{1F6F8}]', // E5.0   [2] (🛷..🛸)    sled..flying saucer
        '\\x{1F6F9}', // E11.0  [1] (🛹)       skateboard
        '\\x{1F6FA}', // E12.0  [1] (🛺)       auto rickshaw
        '[\\x{1F6FB}-\\x{1F6FC}]', // E13.0  [2] (🛻..🛼)    pickup truck..roller skate
        '[\\x{1F7E0}-\\x{1F7EB}]', // E12.0 [12] (🟠..🟫)    orange circle..brown square
        '\\x{1F90C}', // E13.0  [1] (🤌)       pinched fingers
        '[\\x{1F90D}-\\x{1F90F}]', // E12.0  [3] (🤍..🤏)    white heart..pinching hand
        '[\\x{1F910}-\\x{1F918}]', // E1.0   [9] (🤐..🤘)    zipper-mouth face..sign of the horns
        '[\\x{1F919}-\\x{1F91E}]', // E3.0   [6] (🤙..🤞)    call me hand..crossed fingers
        '\\x{1F91F}', // E5.0   [1] (🤟)       love-you gesture
        '[\\x{1F920}-\\x{1F927}]', // E3.0   [8] (🤠..🤧)    cowboy hat face..sneezing face
        '[\\x{1F928}-\\x{1F92F}]', // E5.0   [8] (🤨..🤯)    face with raised eyebrow..exploding head
        '\\x{1F930}', // E3.0   [1] (🤰)       pregnant woman
        '[\\x{1F931}-\\x{1F932}]', // E5.0   [2] (🤱..🤲)    breast-feeding..palms up together
        '[\\x{1F933}-\\x{1F93A}]', // E3.0   [8] (🤳..🤺)    selfie..person fencing
        '[\\x{1F93C}-\\x{1F93E}]', // E3.0   [3] (🤼..🤾)    people wrestling..person playing handball
        '\\x{1F93F}', // E12.0  [1] (🤿)       diving mask
        '[\\x{1F940}-\\x{1F945}]', // E3.0   [6] (🥀..🥅)    wilted flower..goal net
        '[\\x{1F947}-\\x{1F94B}]', // E3.0   [5] (🥇..🥋)    1st place medal..martial arts uniform
        '\\x{1F94C}', // E5.0   [1] (🥌)       curling stone
        '[\\x{1F94D}-\\x{1F94F}]', // E11.0  [3] (🥍..🥏)    lacrosse..flying disc
        '[\\x{1F950}-\\x{1F95E}]', // E3.0  [15] (🥐..🥞)    croissant..pancakes
        '[\\x{1F95F}-\\x{1F96B}]', // E5.0  [13] (🥟..🥫)    dumpling..canned food
        '[\\x{1F96C}-\\x{1F970}]', // E11.0  [5] (🥬..🥰)    leafy green..smiling face with hearts
        '\\x{1F971}', // E12.0  [1] (🥱)       yawning face
        '\\x{1F972}', // E13.0  [1] (🥲)       smiling face with tear
        '[\\x{1F973}-\\x{1F976}]', // E11.0  [4] (🥳..🥶)    partying face..cold face
        '[\\x{1F977}-\\x{1F978}]', // E13.0  [2] (🥷..🥸)    ninja..disguised face
        '\\x{1F97A}', // E11.0  [1] (🥺)       pleading face
        '\\x{1F97B}', // E12.0  [1] (🥻)       sari
        '[\\x{1F97C}-\\x{1F97F}]', // E11.0  [4] (🥼..🥿)    lab coat..flat shoe
        '[\\x{1F980}-\\x{1F984}]', // E1.0   [5] (🦀..🦄)    crab..unicorn
        '[\\x{1F985}-\\x{1F991}]', // E3.0  [13] (🦅..🦑)    eagle..squid
        '[\\x{1F992}-\\x{1F997}]', // E5.0   [6] (🦒..🦗)    giraffe..cricket
        '[\\x{1F998}-\\x{1F9A2}]', // E11.0 [11] (🦘..🦢)    kangaroo..swan
        '[\\x{1F9A3}-\\x{1F9A4}]', // E13.0  [2] (🦣..🦤)    mammoth..dodo
        '[\\x{1F9A5}-\\x{1F9AA}]', // E12.0  [6] (🦥..🦪)    sloth..oyster
        '[\\x{1F9AB}-\\x{1F9AD}]', // E13.0  [3] (🦫..🦭)    beaver..seal
        '[\\x{1F9AE}-\\x{1F9AF}]', // E12.0  [2] (🦮..🦯)    guide dog..white cane
        '[\\x{1F9B0}-\\x{1F9B9}]', // E11.0 [10] (🦰..🦹)    red hair..supervillain
        '[\\x{1F9BA}-\\x{1F9BF}]', // E12.0  [6] (🦺..🦿)    safety vest..mechanical leg
        '\\x{1F9C0}', // E1.0   [1] (🧀)       cheese wedge
        '[\\x{1F9C1}-\\x{1F9C2}]', // E11.0  [2] (🧁..🧂)    cupcake..salt
        '[\\x{1F9C3}-\\x{1F9CA}]', // E12.0  [8] (🧃..🧊)    beverage box..ice
        '\\x{1F9CB}', // E13.0  [1] (🧋)       bubble tea
        '[\\x{1F9CD}-\\x{1F9CF}]', // E12.0  [3] (🧍..🧏)    person standing..deaf person
        '[\\x{1F9D0}-\\x{1F9E6}]', // E5.0  [23] (🧐..🧦)    face with monocle..socks
        '[\\x{1F9E7}-\\x{1F9FF}]', // E11.0 [25] (🧧..🧿)    red envelope..nazar amulet
        '[\\x{1FA70}-\\x{1FA73}]', // E12.0  [4] (🩰..🩳)    ballet shoes..shorts
        '\\x{1FA74}', // E13.0  [1] (🩴)       thong sandal
        '[\\x{1FA78}-\\x{1FA7A}]', // E12.0  [3] (🩸..🩺)    drop of blood..stethoscope
        '[\\x{1FA80}-\\x{1FA82}]', // E12.0  [3] (🪀..🪂)    yo-yo..parachute
        '[\\x{1FA83}-\\x{1FA86}]', // E13.0  [4] (🪃..🪆)    boomerang..nesting dolls
        '[\\x{1FA90}-\\x{1FA95}]', // E12.0  [6] (🪐..🪕)    ringed planet..banjo
        '[\\x{1FA96}-\\x{1FAA8}]', // E13.0 [19] (🪖..🪨)    military helmet..rock
        '[\\x{1FAB0}-\\x{1FAB6}]', // E13.0  [7] (🪰..🪶)    fly..feather
        '[\\x{1FAC0}-\\x{1FAC2}]', // E13.0  [3] (🫀..🫂)    anatomical heart..people hugging
        '[\\x{1FAD0}-\\x{1FAD6}]', // E13.0  [7] (🫐..🫖)    blueberries..teapot
        '[\\x{231A}-\\x{231B}]', // E0.6   [2] (⌚..⌛)    watch..hourglass done
        '[\\x{23E9}-\\x{23EC}]', // E0.6   [4] (⏩..⏬)    fast-forward button..fast down button
        '\\x{23F0}', // E0.6   [1] (⏰)       alarm clock
        '\\x{23F3}', // E0.6   [1] (⏳)       hourglass not done
        '[\\x{25FD}-\\x{25FE}]', // E0.6   [2] (◽..◾)    white medium-small square..black medium-small square
        '[\\x{2614}-\\x{2615}]', // E0.6   [2] (☔..☕)    umbrella with rain drops..hot beverage
        '[\\x{2648}-\\x{2653}]', // E0.6  [12] (♈..♓)    Aries..Pisces
        '\\x{267F}', // E0.6   [1] (♿)       wheelchair symbol
        '\\x{2693}', // E0.6   [1] (⚓)       anchor
        '\\x{26A1}', // E0.6   [1] (⚡)       high voltage
        '[\\x{26AA}-\\x{26AB}]', // E0.6   [2] (⚪..⚫)    white circle..black circle
        '[\\x{26BD}-\\x{26BE}]', // E0.6   [2] (⚽..⚾)    soccer ball..baseball
        '[\\x{26C4}-\\x{26C5}]', // E0.6   [2] (⛄..⛅)    snowman without snow..sun behind cloud
        '\\x{26CE}', // E0.6   [1] (⛎)       Ophiuchus
        '\\x{26D4}', // E0.6   [1] (⛔)       no entry
        '\\x{26EA}', // E0.6   [1] (⛪)       church
        '[\\x{26F2}-\\x{26F3}]', // E0.6   [2] (⛲..⛳)    fountain..flag in hole
        '\\x{26F5}', // E0.6   [1] (⛵)       sailboat
        '\\x{26FA}', // E0.6   [1] (⛺)       tent
        '\\x{26FD}', // E0.6   [1] (⛽)       fuel pump
        '\\x{2705}', // E0.6   [1] (✅)       check mark button
        '[\\x{270A}-\\x{270B}]', // E0.6   [2] (✊..✋)    raised fist..raised hand
        '\\x{2728}', // E0.6   [1] (✨)       sparkles
        '\\x{274C}', // E0.6   [1] (❌)       cross mark
        '\\x{274E}', // E0.6   [1] (❎)       cross mark button
        '[\\x{2753}-\\x{2755}]', // E0.6   [3] (❓..❕)    question mark..white exclamation mark
        '\\x{2757}', // E0.6   [1] (❗)       exclamation mark
        '[\\x{2795}-\\x{2797}]', // E0.6   [3] (➕..➗)    plus..divide
        '\\x{27B0}', // E0.6   [1] (➰)       curly loop
        '\\x{27BF}', // E1.0   [1] (➿)       double curly loop
        '[\\x{2B1B}-\\x{2B1C}]', // E0.6   [2] (⬛..⬜)    black large square..white large square
        '\\x{2B50}', // E0.6   [1] (⭐)       star
        '\\x{2B55}', // E0.6   [1] (⭕)       hollow red circle
    ];

    /**
     * Patterns that match emoji sequences. This includes keycap characters, flags, and skintone
     * variants, but not Zero-Width-Joiner (ZWJ) sequences used for "family" characters like "👨‍👩‍👧‍👧".
     */
    private const SEQUENCE_PATTERNS = [
        '\\x{1F3F4}\\x{E0067}\\x{E0062}\\x{E0065}\\x{E006E}\\x{E0067}\\x{E007F}', // E5.0   [1] (🏴󠁧󠁢󠁥󠁮󠁧󠁿)
        '\\x{1F3F4}\\x{E0067}\\x{E0062}\\x{E0073}\\x{E0063}\\x{E0074}\\x{E007F}', // E5.0   [1] (🏴󠁧󠁢󠁳󠁣󠁴󠁿)
        '\\x{1F3F4}\\x{E0067}\\x{E0062}\\x{E0077}\\x{E006C}\\x{E0073}\\x{E007F}', // E5.0   [1] (🏴󠁧󠁢󠁷󠁬󠁳󠁿)
        '\\x{0023}\\x{FE0F}\\x{20E3}', // E0.6   [1] (#️⃣)
        '\\x{002A}\\x{FE0F}\\x{20E3}', // E2.0   [1] (*️⃣)
        '\\x{0030}\\x{FE0F}\\x{20E3}', // E0.6   [1] (0️⃣)
        '\\x{0031}\\x{FE0F}\\x{20E3}', // E0.6   [1] (1️⃣)
        '\\x{0032}\\x{FE0F}\\x{20E3}', // E0.6   [1] (2️⃣)
        '\\x{0033}\\x{FE0F}\\x{20E3}', // E0.6   [1] (3️⃣)
        '\\x{0034}\\x{FE0F}\\x{20E3}', // E0.6   [1] (4️⃣)
        '\\x{0035}\\x{FE0F}\\x{20E3}', // E0.6   [1] (5️⃣)
        '\\x{0036}\\x{FE0F}\\x{20E3}', // E0.6   [1] (6️⃣)
        '\\x{0037}\\x{FE0F}\\x{20E3}', // E0.6   [1] (7️⃣)
        '\\x{0038}\\x{FE0F}\\x{20E3}', // E0.6   [1] (8️⃣)
        '\\x{0039}\\x{FE0F}\\x{20E3}', // E0.6   [1] (9️⃣)
        '\\x{00A9}\\x{FE0F}', // E0.6   [1] (©️)
        '\\x{00AE}\\x{FE0F}', // E0.6   [1] (®️)
        '\\x{1F170}\\x{FE0F}', // E0.6   [1] (🅰️)
        '\\x{1F171}\\x{FE0F}', // E0.6   [1] (🅱️)
        '\\x{1F17E}\\x{FE0F}', // E0.6   [1] (🅾️)
        '\\x{1F17F}\\x{FE0F}', // E0.6   [1] (🅿️)
        '\\x{1F1E6}\\x{1F1E8}', // E2.0   [1] (🇦🇨)
        '\\x{1F1E6}\\x{1F1E9}', // E2.0   [1] (🇦🇩)
        '\\x{1F1E6}\\x{1F1EA}', // E2.0   [1] (🇦🇪)
        '\\x{1F1E6}\\x{1F1EB}', // E2.0   [1] (🇦🇫)
        '\\x{1F1E6}\\x{1F1EC}', // E2.0   [1] (🇦🇬)
        '\\x{1F1E6}\\x{1F1EE}', // E2.0   [1] (🇦🇮)
        '\\x{1F1E6}\\x{1F1F1}', // E2.0   [1] (🇦🇱)
        '\\x{1F1E6}\\x{1F1F2}', // E2.0   [1] (🇦🇲)
        '\\x{1F1E6}\\x{1F1F4}', // E2.0   [1] (🇦🇴)
        '\\x{1F1E6}\\x{1F1F6}', // E2.0   [1] (🇦🇶)
        '\\x{1F1E6}\\x{1F1F7}', // E2.0   [1] (🇦🇷)
        '\\x{1F1E6}\\x{1F1F8}', // E2.0   [1] (🇦🇸)
        '\\x{1F1E6}\\x{1F1F9}', // E2.0   [1] (🇦🇹)
        '\\x{1F1E6}\\x{1F1FA}', // E2.0   [1] (🇦🇺)
        '\\x{1F1E6}\\x{1F1FC}', // E2.0   [1] (🇦🇼)
        '\\x{1F1E6}\\x{1F1FD}', // E2.0   [1] (🇦🇽)
        '\\x{1F1E6}\\x{1F1FF}', // E2.0   [1] (🇦🇿)
        '\\x{1F1E7}\\x{1F1E6}', // E2.0   [1] (🇧🇦)
        '\\x{1F1E7}\\x{1F1E7}', // E2.0   [1] (🇧🇧)
        '\\x{1F1E7}\\x{1F1E9}', // E2.0   [1] (🇧🇩)
        '\\x{1F1E7}\\x{1F1EA}', // E2.0   [1] (🇧🇪)
        '\\x{1F1E7}\\x{1F1EB}', // E2.0   [1] (🇧🇫)
        '\\x{1F1E7}\\x{1F1EC}', // E2.0   [1] (🇧🇬)
        '\\x{1F1E7}\\x{1F1ED}', // E2.0   [1] (🇧🇭)
        '\\x{1F1E7}\\x{1F1EE}', // E2.0   [1] (🇧🇮)
        '\\x{1F1E7}\\x{1F1EF}', // E2.0   [1] (🇧🇯)
        '\\x{1F1E7}\\x{1F1F1}', // E2.0   [1] (🇧🇱)
        '\\x{1F1E7}\\x{1F1F2}', // E2.0   [1] (🇧🇲)
        '\\x{1F1E7}\\x{1F1F3}', // E2.0   [1] (🇧🇳)
        '\\x{1F1E7}\\x{1F1F4}', // E2.0   [1] (🇧🇴)
        '\\x{1F1E7}\\x{1F1F6}', // E2.0   [1] (🇧🇶)
        '\\x{1F1E7}\\x{1F1F7}', // E2.0   [1] (🇧🇷)
        '\\x{1F1E7}\\x{1F1F8}', // E2.0   [1] (🇧🇸)
        '\\x{1F1E7}\\x{1F1F9}', // E2.0   [1] (🇧🇹)
        '\\x{1F1E7}\\x{1F1FB}', // E2.0   [1] (🇧🇻)
        '\\x{1F1E7}\\x{1F1FC}', // E2.0   [1] (🇧🇼)
        '\\x{1F1E7}\\x{1F1FE}', // E2.0   [1] (🇧🇾)
        '\\x{1F1E7}\\x{1F1FF}', // E2.0   [1] (🇧🇿)
        '\\x{1F1E8}\\x{1F1E6}', // E2.0   [1] (🇨🇦)
        '\\x{1F1E8}\\x{1F1E8}', // E2.0   [1] (🇨🇨)
        '\\x{1F1E8}\\x{1F1E9}', // E2.0   [1] (🇨🇩)
        '\\x{1F1E8}\\x{1F1EB}', // E2.0   [1] (🇨🇫)
        '\\x{1F1E8}\\x{1F1EC}', // E2.0   [1] (🇨🇬)
        '\\x{1F1E8}\\x{1F1ED}', // E2.0   [1] (🇨🇭)
        '\\x{1F1E8}\\x{1F1EE}', // E2.0   [1] (🇨🇮)
        '\\x{1F1E8}\\x{1F1F0}', // E2.0   [1] (🇨🇰)
        '\\x{1F1E8}\\x{1F1F1}', // E2.0   [1] (🇨🇱)
        '\\x{1F1E8}\\x{1F1F2}', // E2.0   [1] (🇨🇲)
        '\\x{1F1E8}\\x{1F1F3}', // E0.6   [1] (🇨🇳)
        '\\x{1F1E8}\\x{1F1F4}', // E2.0   [1] (🇨🇴)
        '\\x{1F1E8}\\x{1F1F5}', // E2.0   [1] (🇨🇵)
        '\\x{1F1E8}\\x{1F1F7}', // E2.0   [1] (🇨🇷)
        '\\x{1F1E8}\\x{1F1FA}', // E2.0   [1] (🇨🇺)
        '\\x{1F1E8}\\x{1F1FB}', // E2.0   [1] (🇨🇻)
        '\\x{1F1E8}\\x{1F1FC}', // E2.0   [1] (🇨🇼)
        '\\x{1F1E8}\\x{1F1FD}', // E2.0   [1] (🇨🇽)
        '\\x{1F1E8}\\x{1F1FE}', // E2.0   [1] (🇨🇾)
        '\\x{1F1E8}\\x{1F1FF}', // E2.0   [1] (🇨🇿)
        '\\x{1F1E9}\\x{1F1EA}', // E0.6   [1] (🇩🇪)
        '\\x{1F1E9}\\x{1F1EC}', // E2.0   [1] (🇩🇬)
        '\\x{1F1E9}\\x{1F1EF}', // E2.0   [1] (🇩🇯)
        '\\x{1F1E9}\\x{1F1F0}', // E2.0   [1] (🇩🇰)
        '\\x{1F1E9}\\x{1F1F2}', // E2.0   [1] (🇩🇲)
        '\\x{1F1E9}\\x{1F1F4}', // E2.0   [1] (🇩🇴)
        '\\x{1F1E9}\\x{1F1FF}', // E2.0   [1] (🇩🇿)
        '\\x{1F1EA}\\x{1F1E6}', // E2.0   [1] (🇪🇦)
        '\\x{1F1EA}\\x{1F1E8}', // E2.0   [1] (🇪🇨)
        '\\x{1F1EA}\\x{1F1EA}', // E2.0   [1] (🇪🇪)
        '\\x{1F1EA}\\x{1F1EC}', // E2.0   [1] (🇪🇬)
        '\\x{1F1EA}\\x{1F1ED}', // E2.0   [1] (🇪🇭)
        '\\x{1F1EA}\\x{1F1F7}', // E2.0   [1] (🇪🇷)
        '\\x{1F1EA}\\x{1F1F8}', // E0.6   [1] (🇪🇸)
        '\\x{1F1EA}\\x{1F1F9}', // E2.0   [1] (🇪🇹)
        '\\x{1F1EA}\\x{1F1FA}', // E2.0   [1] (🇪🇺)
        '\\x{1F1EB}\\x{1F1EE}', // E2.0   [1] (🇫🇮)
        '\\x{1F1EB}\\x{1F1EF}', // E2.0   [1] (🇫🇯)
        '\\x{1F1EB}\\x{1F1F0}', // E2.0   [1] (🇫🇰)
        '\\x{1F1EB}\\x{1F1F2}', // E2.0   [1] (🇫🇲)
        '\\x{1F1EB}\\x{1F1F4}', // E2.0   [1] (🇫🇴)
        '\\x{1F1EB}\\x{1F1F7}', // E0.6   [1] (🇫🇷)
        '\\x{1F1EC}\\x{1F1E6}', // E2.0   [1] (🇬🇦)
        '\\x{1F1EC}\\x{1F1E7}', // E0.6   [1] (🇬🇧)
        '\\x{1F1EC}\\x{1F1E9}', // E2.0   [1] (🇬🇩)
        '\\x{1F1EC}\\x{1F1EA}', // E2.0   [1] (🇬🇪)
        '\\x{1F1EC}\\x{1F1EB}', // E2.0   [1] (🇬🇫)
        '\\x{1F1EC}\\x{1F1EC}', // E2.0   [1] (🇬🇬)
        '\\x{1F1EC}\\x{1F1ED}', // E2.0   [1] (🇬🇭)
        '\\x{1F1EC}\\x{1F1EE}', // E2.0   [1] (🇬🇮)
        '\\x{1F1EC}\\x{1F1F1}', // E2.0   [1] (🇬🇱)
        '\\x{1F1EC}\\x{1F1F2}', // E2.0   [1] (🇬🇲)
        '\\x{1F1EC}\\x{1F1F3}', // E2.0   [1] (🇬🇳)
        '\\x{1F1EC}\\x{1F1F5}', // E2.0   [1] (🇬🇵)
        '\\x{1F1EC}\\x{1F1F6}', // E2.0   [1] (🇬🇶)
        '\\x{1F1EC}\\x{1F1F7}', // E2.0   [1] (🇬🇷)
        '\\x{1F1EC}\\x{1F1F8}', // E2.0   [1] (🇬🇸)
        '\\x{1F1EC}\\x{1F1F9}', // E2.0   [1] (🇬🇹)
        '\\x{1F1EC}\\x{1F1FA}', // E2.0   [1] (🇬🇺)
        '\\x{1F1EC}\\x{1F1FC}', // E2.0   [1] (🇬🇼)
        '\\x{1F1EC}\\x{1F1FE}', // E2.0   [1] (🇬🇾)
        '\\x{1F1ED}\\x{1F1F0}', // E2.0   [1] (🇭🇰)
        '\\x{1F1ED}\\x{1F1F2}', // E2.0   [1] (🇭🇲)
        '\\x{1F1ED}\\x{1F1F3}', // E2.0   [1] (🇭🇳)
        '\\x{1F1ED}\\x{1F1F7}', // E2.0   [1] (🇭🇷)
        '\\x{1F1ED}\\x{1F1F9}', // E2.0   [1] (🇭🇹)
        '\\x{1F1ED}\\x{1F1FA}', // E2.0   [1] (🇭🇺)
        '\\x{1F1EE}\\x{1F1E8}', // E2.0   [1] (🇮🇨)
        '\\x{1F1EE}\\x{1F1E9}', // E2.0   [1] (🇮🇩)
        '\\x{1F1EE}\\x{1F1EA}', // E2.0   [1] (🇮🇪)
        '\\x{1F1EE}\\x{1F1F1}', // E2.0   [1] (🇮🇱)
        '\\x{1F1EE}\\x{1F1F2}', // E2.0   [1] (🇮🇲)
        '\\x{1F1EE}\\x{1F1F3}', // E2.0   [1] (🇮🇳)
        '\\x{1F1EE}\\x{1F1F4}', // E2.0   [1] (🇮🇴)
        '\\x{1F1EE}\\x{1F1F6}', // E2.0   [1] (🇮🇶)
        '\\x{1F1EE}\\x{1F1F7}', // E2.0   [1] (🇮🇷)
        '\\x{1F1EE}\\x{1F1F8}', // E2.0   [1] (🇮🇸)
        '\\x{1F1EE}\\x{1F1F9}', // E0.6   [1] (🇮🇹)
        '\\x{1F1EF}\\x{1F1EA}', // E2.0   [1] (🇯🇪)
        '\\x{1F1EF}\\x{1F1F2}', // E2.0   [1] (🇯🇲)
        '\\x{1F1EF}\\x{1F1F4}', // E2.0   [1] (🇯🇴)
        '\\x{1F1EF}\\x{1F1F5}', // E0.6   [1] (🇯🇵)
        '\\x{1F1F0}\\x{1F1EA}', // E2.0   [1] (🇰🇪)
        '\\x{1F1F0}\\x{1F1EC}', // E2.0   [1] (🇰🇬)
        '\\x{1F1F0}\\x{1F1ED}', // E2.0   [1] (🇰🇭)
        '\\x{1F1F0}\\x{1F1EE}', // E2.0   [1] (🇰🇮)
        '\\x{1F1F0}\\x{1F1F2}', // E2.0   [1] (🇰🇲)
        '\\x{1F1F0}\\x{1F1F3}', // E2.0   [1] (🇰🇳)
        '\\x{1F1F0}\\x{1F1F5}', // E2.0   [1] (🇰🇵)
        '\\x{1F1F0}\\x{1F1F7}', // E0.6   [1] (🇰🇷)
        '\\x{1F1F0}\\x{1F1FC}', // E2.0   [1] (🇰🇼)
        '\\x{1F1F0}\\x{1F1FE}', // E2.0   [1] (🇰🇾)
        '\\x{1F1F0}\\x{1F1FF}', // E2.0   [1] (🇰🇿)
        '\\x{1F1F1}\\x{1F1E6}', // E2.0   [1] (🇱🇦)
        '\\x{1F1F1}\\x{1F1E7}', // E2.0   [1] (🇱🇧)
        '\\x{1F1F1}\\x{1F1E8}', // E2.0   [1] (🇱🇨)
        '\\x{1F1F1}\\x{1F1EE}', // E2.0   [1] (🇱🇮)
        '\\x{1F1F1}\\x{1F1F0}', // E2.0   [1] (🇱🇰)
        '\\x{1F1F1}\\x{1F1F7}', // E2.0   [1] (🇱🇷)
        '\\x{1F1F1}\\x{1F1F8}', // E2.0   [1] (🇱🇸)
        '\\x{1F1F1}\\x{1F1F9}', // E2.0   [1] (🇱🇹)
        '\\x{1F1F1}\\x{1F1FA}', // E2.0   [1] (🇱🇺)
        '\\x{1F1F1}\\x{1F1FB}', // E2.0   [1] (🇱🇻)
        '\\x{1F1F1}\\x{1F1FE}', // E2.0   [1] (🇱🇾)
        '\\x{1F1F2}\\x{1F1E6}', // E2.0   [1] (🇲🇦)
        '\\x{1F1F2}\\x{1F1E8}', // E2.0   [1] (🇲🇨)
        '\\x{1F1F2}\\x{1F1E9}', // E2.0   [1] (🇲🇩)
        '\\x{1F1F2}\\x{1F1EA}', // E2.0   [1] (🇲🇪)
        '\\x{1F1F2}\\x{1F1EB}', // E2.0   [1] (🇲🇫)
        '\\x{1F1F2}\\x{1F1EC}', // E2.0   [1] (🇲🇬)
        '\\x{1F1F2}\\x{1F1ED}', // E2.0   [1] (🇲🇭)
        '\\x{1F1F2}\\x{1F1F0}', // E2.0   [1] (🇲🇰)
        '\\x{1F1F2}\\x{1F1F1}', // E2.0   [1] (🇲🇱)
        '\\x{1F1F2}\\x{1F1F2}', // E2.0   [1] (🇲🇲)
        '\\x{1F1F2}\\x{1F1F3}', // E2.0   [1] (🇲🇳)
        '\\x{1F1F2}\\x{1F1F4}', // E2.0   [1] (🇲🇴)
        '\\x{1F1F2}\\x{1F1F5}', // E2.0   [1] (🇲🇵)
        '\\x{1F1F2}\\x{1F1F6}', // E2.0   [1] (🇲🇶)
        '\\x{1F1F2}\\x{1F1F7}', // E2.0   [1] (🇲🇷)
        '\\x{1F1F2}\\x{1F1F8}', // E2.0   [1] (🇲🇸)
        '\\x{1F1F2}\\x{1F1F9}', // E2.0   [1] (🇲🇹)
        '\\x{1F1F2}\\x{1F1FA}', // E2.0   [1] (🇲🇺)
        '\\x{1F1F2}\\x{1F1FB}', // E2.0   [1] (🇲🇻)
        '\\x{1F1F2}\\x{1F1FC}', // E2.0   [1] (🇲🇼)
        '\\x{1F1F2}\\x{1F1FD}', // E2.0   [1] (🇲🇽)
        '\\x{1F1F2}\\x{1F1FE}', // E2.0   [1] (🇲🇾)
        '\\x{1F1F2}\\x{1F1FF}', // E2.0   [1] (🇲🇿)
        '\\x{1F1F3}\\x{1F1E6}', // E2.0   [1] (🇳🇦)
        '\\x{1F1F3}\\x{1F1E8}', // E2.0   [1] (🇳🇨)
        '\\x{1F1F3}\\x{1F1EA}', // E2.0   [1] (🇳🇪)
        '\\x{1F1F3}\\x{1F1EB}', // E2.0   [1] (🇳🇫)
        '\\x{1F1F3}\\x{1F1EC}', // E2.0   [1] (🇳🇬)
        '\\x{1F1F3}\\x{1F1EE}', // E2.0   [1] (🇳🇮)
        '\\x{1F1F3}\\x{1F1F1}', // E2.0   [1] (🇳🇱)
        '\\x{1F1F3}\\x{1F1F4}', // E2.0   [1] (🇳🇴)
        '\\x{1F1F3}\\x{1F1F5}', // E2.0   [1] (🇳🇵)
        '\\x{1F1F3}\\x{1F1F7}', // E2.0   [1] (🇳🇷)
        '\\x{1F1F3}\\x{1F1FA}', // E2.0   [1] (🇳🇺)
        '\\x{1F1F3}\\x{1F1FF}', // E2.0   [1] (🇳🇿)
        '\\x{1F1F4}\\x{1F1F2}', // E2.0   [1] (🇴🇲)
        '\\x{1F1F5}\\x{1F1E6}', // E2.0   [1] (🇵🇦)
        '\\x{1F1F5}\\x{1F1EA}', // E2.0   [1] (🇵🇪)
        '\\x{1F1F5}\\x{1F1EB}', // E2.0   [1] (🇵🇫)
        '\\x{1F1F5}\\x{1F1EC}', // E2.0   [1] (🇵🇬)
        '\\x{1F1F5}\\x{1F1ED}', // E2.0   [1] (🇵🇭)
        '\\x{1F1F5}\\x{1F1F0}', // E2.0   [1] (🇵🇰)
        '\\x{1F1F5}\\x{1F1F1}', // E2.0   [1] (🇵🇱)
        '\\x{1F1F5}\\x{1F1F2}', // E2.0   [1] (🇵🇲)
        '\\x{1F1F5}\\x{1F1F3}', // E2.0   [1] (🇵🇳)
        '\\x{1F1F5}\\x{1F1F7}', // E2.0   [1] (🇵🇷)
        '\\x{1F1F5}\\x{1F1F8}', // E2.0   [1] (🇵🇸)
        '\\x{1F1F5}\\x{1F1F9}', // E2.0   [1] (🇵🇹)
        '\\x{1F1F5}\\x{1F1FC}', // E2.0   [1] (🇵🇼)
        '\\x{1F1F5}\\x{1F1FE}', // E2.0   [1] (🇵🇾)
        '\\x{1F1F6}\\x{1F1E6}', // E2.0   [1] (🇶🇦)
        '\\x{1F1F7}\\x{1F1EA}', // E2.0   [1] (🇷🇪)
        '\\x{1F1F7}\\x{1F1F4}', // E2.0   [1] (🇷🇴)
        '\\x{1F1F7}\\x{1F1F8}', // E2.0   [1] (🇷🇸)
        '\\x{1F1F7}\\x{1F1FA}', // E0.6   [1] (🇷🇺)
        '\\x{1F1F7}\\x{1F1FC}', // E2.0   [1] (🇷🇼)
        '\\x{1F1F8}\\x{1F1E6}', // E2.0   [1] (🇸🇦)
        '\\x{1F1F8}\\x{1F1E7}', // E2.0   [1] (🇸🇧)
        '\\x{1F1F8}\\x{1F1E8}', // E2.0   [1] (🇸🇨)
        '\\x{1F1F8}\\x{1F1E9}', // E2.0   [1] (🇸🇩)
        '\\x{1F1F8}\\x{1F1EA}', // E2.0   [1] (🇸🇪)
        '\\x{1F1F8}\\x{1F1EC}', // E2.0   [1] (🇸🇬)
        '\\x{1F1F8}\\x{1F1ED}', // E2.0   [1] (🇸🇭)
        '\\x{1F1F8}\\x{1F1EE}', // E2.0   [1] (🇸🇮)
        '\\x{1F1F8}\\x{1F1EF}', // E2.0   [1] (🇸🇯)
        '\\x{1F1F8}\\x{1F1F0}', // E2.0   [1] (🇸🇰)
        '\\x{1F1F8}\\x{1F1F1}', // E2.0   [1] (🇸🇱)
        '\\x{1F1F8}\\x{1F1F2}', // E2.0   [1] (🇸🇲)
        '\\x{1F1F8}\\x{1F1F3}', // E2.0   [1] (🇸🇳)
        '\\x{1F1F8}\\x{1F1F4}', // E2.0   [1] (🇸🇴)
        '\\x{1F1F8}\\x{1F1F7}', // E2.0   [1] (🇸🇷)
        '\\x{1F1F8}\\x{1F1F8}', // E2.0   [1] (🇸🇸)
        '\\x{1F1F8}\\x{1F1F9}', // E2.0   [1] (🇸🇹)
        '\\x{1F1F8}\\x{1F1FB}', // E2.0   [1] (🇸🇻)
        '\\x{1F1F8}\\x{1F1FD}', // E2.0   [1] (🇸🇽)
        '\\x{1F1F8}\\x{1F1FE}', // E2.0   [1] (🇸🇾)
        '\\x{1F1F8}\\x{1F1FF}', // E2.0   [1] (🇸🇿)
        '\\x{1F1F9}\\x{1F1E6}', // E2.0   [1] (🇹🇦)
        '\\x{1F1F9}\\x{1F1E8}', // E2.0   [1] (🇹🇨)
        '\\x{1F1F9}\\x{1F1E9}', // E2.0   [1] (🇹🇩)
        '\\x{1F1F9}\\x{1F1EB}', // E2.0   [1] (🇹🇫)
        '\\x{1F1F9}\\x{1F1EC}', // E2.0   [1] (🇹🇬)
        '\\x{1F1F9}\\x{1F1ED}', // E2.0   [1] (🇹🇭)
        '\\x{1F1F9}\\x{1F1EF}', // E2.0   [1] (🇹🇯)
        '\\x{1F1F9}\\x{1F1F0}', // E2.0   [1] (🇹🇰)
        '\\x{1F1F9}\\x{1F1F1}', // E2.0   [1] (🇹🇱)
        '\\x{1F1F9}\\x{1F1F2}', // E2.0   [1] (🇹🇲)
        '\\x{1F1F9}\\x{1F1F3}', // E2.0   [1] (🇹🇳)
        '\\x{1F1F9}\\x{1F1F4}', // E2.0   [1] (🇹🇴)
        '\\x{1F1F9}\\x{1F1F7}', // E2.0   [1] (🇹🇷)
        '\\x{1F1F9}\\x{1F1F9}', // E2.0   [1] (🇹🇹)
        '\\x{1F1F9}\\x{1F1FB}', // E2.0   [1] (🇹🇻)
        '\\x{1F1F9}\\x{1F1FC}', // E2.0   [1] (🇹🇼)
        '\\x{1F1F9}\\x{1F1FF}', // E2.0   [1] (🇹🇿)
        '\\x{1F1FA}\\x{1F1E6}', // E2.0   [1] (🇺🇦)
        '\\x{1F1FA}\\x{1F1EC}', // E2.0   [1] (🇺🇬)
        '\\x{1F1FA}\\x{1F1F2}', // E2.0   [1] (🇺🇲)
        '\\x{1F1FA}\\x{1F1F3}', // E4.0   [1] (🇺🇳)
        '\\x{1F1FA}\\x{1F1F8}', // E0.6   [1] (🇺🇸)
        '\\x{1F1FA}\\x{1F1FE}', // E2.0   [1] (🇺🇾)
        '\\x{1F1FA}\\x{1F1FF}', // E2.0   [1] (🇺🇿)
        '\\x{1F1FB}\\x{1F1E6}', // E2.0   [1] (🇻🇦)
        '\\x{1F1FB}\\x{1F1E8}', // E2.0   [1] (🇻🇨)
        '\\x{1F1FB}\\x{1F1EA}', // E2.0   [1] (🇻🇪)
        '\\x{1F1FB}\\x{1F1EC}', // E2.0   [1] (🇻🇬)
        '\\x{1F1FB}\\x{1F1EE}', // E2.0   [1] (🇻🇮)
        '\\x{1F1FB}\\x{1F1F3}', // E2.0   [1] (🇻🇳)
        '\\x{1F1FB}\\x{1F1FA}', // E2.0   [1] (🇻🇺)
        '\\x{1F1FC}\\x{1F1EB}', // E2.0   [1] (🇼🇫)
        '\\x{1F1FC}\\x{1F1F8}', // E2.0   [1] (🇼🇸)
        '\\x{1F1FD}\\x{1F1F0}', // E2.0   [1] (🇽🇰)
        '\\x{1F1FE}\\x{1F1EA}', // E2.0   [1] (🇾🇪)
        '\\x{1F1FE}\\x{1F1F9}', // E2.0   [1] (🇾🇹)
        '\\x{1F1FF}\\x{1F1E6}', // E2.0   [1] (🇿🇦)
        '\\x{1F1FF}\\x{1F1F2}', // E2.0   [1] (🇿🇲)
        '\\x{1F1FF}\\x{1F1FC}', // E2.0   [1] (🇿🇼)
        '\\x{1F202}\\x{FE0F}', // E0.6   [1] (🈂️)
        '\\x{1F237}\\x{FE0F}', // E0.6   [1] (🈷️)
        '\\x{1F321}\\x{FE0F}', // E0.7   [1] (🌡️)
        '\\x{1F324}\\x{FE0F}', // E0.7   [1] (🌤️)
        '\\x{1F325}\\x{FE0F}', // E0.7   [1] (🌥️)
        '\\x{1F326}\\x{FE0F}', // E0.7   [1] (🌦️)
        '\\x{1F327}\\x{FE0F}', // E0.7   [1] (🌧️)
        '\\x{1F328}\\x{FE0F}', // E0.7   [1] (🌨️)
        '\\x{1F329}\\x{FE0F}', // E0.7   [1] (🌩️)
        '\\x{1F32A}\\x{FE0F}', // E0.7   [1] (🌪️)
        '\\x{1F32B}\\x{FE0F}', // E0.7   [1] (🌫️)
        '\\x{1F32C}\\x{FE0F}', // E0.7   [1] (🌬️)
        '\\x{1F336}\\x{FE0F}', // E0.7   [1] (🌶️)
        '\\x{1F37D}\\x{FE0F}', // E0.7   [1] (🍽️)
        '\\x{1F385}\\x{1F3FB}', // E1.0   [1] (🎅🏻)
        '\\x{1F385}\\x{1F3FC}', // E1.0   [1] (🎅🏼)
        '\\x{1F385}\\x{1F3FD}', // E1.0   [1] (🎅🏽)
        '\\x{1F385}\\x{1F3FE}', // E1.0   [1] (🎅🏾)
        '\\x{1F385}\\x{1F3FF}', // E1.0   [1] (🎅🏿)
        '\\x{1F396}\\x{FE0F}', // E0.7   [1] (🎖️)
        '\\x{1F397}\\x{FE0F}', // E0.7   [1] (🎗️)
        '\\x{1F399}\\x{FE0F}', // E0.7   [1] (🎙️)
        '\\x{1F39A}\\x{FE0F}', // E0.7   [1] (🎚️)
        '\\x{1F39B}\\x{FE0F}', // E0.7   [1] (🎛️)
        '\\x{1F39E}\\x{FE0F}', // E0.7   [1] (🎞️)
        '\\x{1F39F}\\x{FE0F}', // E0.7   [1] (🎟️)
        '\\x{1F3C2}\\x{1F3FB}', // E1.0   [1] (🏂🏻)
        '\\x{1F3C2}\\x{1F3FC}', // E1.0   [1] (🏂🏼)
        '\\x{1F3C2}\\x{1F3FD}', // E1.0   [1] (🏂🏽)
        '\\x{1F3C2}\\x{1F3FE}', // E1.0   [1] (🏂🏾)
        '\\x{1F3C2}\\x{1F3FF}', // E1.0   [1] (🏂🏿)
        '\\x{1F3C3}\\x{1F3FB}', // E1.0   [1] (🏃🏻)
        '\\x{1F3C3}\\x{1F3FC}', // E1.0   [1] (🏃🏼)
        '\\x{1F3C3}\\x{1F3FD}', // E1.0   [1] (🏃🏽)
        '\\x{1F3C3}\\x{1F3FE}', // E1.0   [1] (🏃🏾)
        '\\x{1F3C3}\\x{1F3FF}', // E1.0   [1] (🏃🏿)
        '\\x{1F3C4}\\x{1F3FB}', // E1.0   [1] (🏄🏻)
        '\\x{1F3C4}\\x{1F3FC}', // E1.0   [1] (🏄🏼)
        '\\x{1F3C4}\\x{1F3FD}', // E1.0   [1] (🏄🏽)
        '\\x{1F3C4}\\x{1F3FE}', // E1.0   [1] (🏄🏾)
        '\\x{1F3C4}\\x{1F3FF}', // E1.0   [1] (🏄🏿)
        '\\x{1F3C7}\\x{1F3FB}', // E1.0   [1] (🏇🏻)
        '\\x{1F3C7}\\x{1F3FC}', // E1.0   [1] (🏇🏼)
        '\\x{1F3C7}\\x{1F3FD}', // E1.0   [1] (🏇🏽)
        '\\x{1F3C7}\\x{1F3FE}', // E1.0   [1] (🏇🏾)
        '\\x{1F3C7}\\x{1F3FF}', // E1.0   [1] (🏇🏿)
        '\\x{1F3CA}\\x{1F3FB}', // E1.0   [1] (🏊🏻)
        '\\x{1F3CA}\\x{1F3FC}', // E1.0   [1] (🏊🏼)
        '\\x{1F3CA}\\x{1F3FD}', // E1.0   [1] (🏊🏽)
        '\\x{1F3CA}\\x{1F3FE}', // E1.0   [1] (🏊🏾)
        '\\x{1F3CA}\\x{1F3FF}', // E1.0   [1] (🏊🏿)
        '\\x{1F3CB}\\x{1F3FB}', // E2.0   [1] (🏋🏻)
        '\\x{1F3CB}\\x{1F3FC}', // E2.0   [1] (🏋🏼)
        '\\x{1F3CB}\\x{1F3FD}', // E2.0   [1] (🏋🏽)
        '\\x{1F3CB}\\x{1F3FE}', // E2.0   [1] (🏋🏾)
        '\\x{1F3CB}\\x{1F3FF}', // E2.0   [1] (🏋🏿)
        '\\x{1F3CB}\\x{FE0F}', // E0.7   [1] (🏋️)
        '\\x{1F3CC}\\x{1F3FB}', // E4.0   [1] (🏌🏻)
        '\\x{1F3CC}\\x{1F3FC}', // E4.0   [1] (🏌🏼)
        '\\x{1F3CC}\\x{1F3FD}', // E4.0   [1] (🏌🏽)
        '\\x{1F3CC}\\x{1F3FE}', // E4.0   [1] (🏌🏾)
        '\\x{1F3CC}\\x{1F3FF}', // E4.0   [1] (🏌🏿)
        '\\x{1F3CC}\\x{FE0F}', // E0.7   [1] (🏌️)
        '\\x{1F3CD}\\x{FE0F}', // E0.7   [1] (🏍️)
        '\\x{1F3CE}\\x{FE0F}', // E0.7   [1] (🏎️)
        '\\x{1F3D4}\\x{FE0F}', // E0.7   [1] (🏔️)
        '\\x{1F3D5}\\x{FE0F}', // E0.7   [1] (🏕️)
        '\\x{1F3D6}\\x{FE0F}', // E0.7   [1] (🏖️)
        '\\x{1F3D7}\\x{FE0F}', // E0.7   [1] (🏗️)
        '\\x{1F3D8}\\x{FE0F}', // E0.7   [1] (🏘️)
        '\\x{1F3D9}\\x{FE0F}', // E0.7   [1] (🏙️)
        '\\x{1F3DA}\\x{FE0F}', // E0.7   [1] (🏚️)
        '\\x{1F3DB}\\x{FE0F}', // E0.7   [1] (🏛️)
        '\\x{1F3DC}\\x{FE0F}', // E0.7   [1] (🏜️)
        '\\x{1F3DD}\\x{FE0F}', // E0.7   [1] (🏝️)
        '\\x{1F3DE}\\x{FE0F}', // E0.7   [1] (🏞️)
        '\\x{1F3DF}\\x{FE0F}', // E0.7   [1] (🏟️)
        '\\x{1F3F3}\\x{FE0F}', // E0.7   [1] (🏳️)
        '\\x{1F3F5}\\x{FE0F}', // E0.7   [1] (🏵️)
        '\\x{1F3F7}\\x{FE0F}', // E0.7   [1] (🏷️)
        '\\x{1F43F}\\x{FE0F}', // E0.7   [1] (🐿️)
        '\\x{1F441}\\x{FE0F}', // E0.7   [1] (👁️)
        '\\x{1F442}\\x{1F3FB}', // E1.0   [1] (👂🏻)
        '\\x{1F442}\\x{1F3FC}', // E1.0   [1] (👂🏼)
        '\\x{1F442}\\x{1F3FD}', // E1.0   [1] (👂🏽)
        '\\x{1F442}\\x{1F3FE}', // E1.0   [1] (👂🏾)
        '\\x{1F442}\\x{1F3FF}', // E1.0   [1] (👂🏿)
        '\\x{1F443}\\x{1F3FB}', // E1.0   [1] (👃🏻)
        '\\x{1F443}\\x{1F3FC}', // E1.0   [1] (👃🏼)
        '\\x{1F443}\\x{1F3FD}', // E1.0   [1] (👃🏽)
        '\\x{1F443}\\x{1F3FE}', // E1.0   [1] (👃🏾)
        '\\x{1F443}\\x{1F3FF}', // E1.0   [1] (👃🏿)
        '\\x{1F446}\\x{1F3FB}', // E1.0   [1] (👆🏻)
        '\\x{1F446}\\x{1F3FC}', // E1.0   [1] (👆🏼)
        '\\x{1F446}\\x{1F3FD}', // E1.0   [1] (👆🏽)
        '\\x{1F446}\\x{1F3FE}', // E1.0   [1] (👆🏾)
        '\\x{1F446}\\x{1F3FF}', // E1.0   [1] (👆🏿)
        '\\x{1F447}\\x{1F3FB}', // E1.0   [1] (👇🏻)
        '\\x{1F447}\\x{1F3FC}', // E1.0   [1] (👇🏼)
        '\\x{1F447}\\x{1F3FD}', // E1.0   [1] (👇🏽)
        '\\x{1F447}\\x{1F3FE}', // E1.0   [1] (👇🏾)
        '\\x{1F447}\\x{1F3FF}', // E1.0   [1] (👇🏿)
        '\\x{1F448}\\x{1F3FB}', // E1.0   [1] (👈🏻)
        '\\x{1F448}\\x{1F3FC}', // E1.0   [1] (👈🏼)
        '\\x{1F448}\\x{1F3FD}', // E1.0   [1] (👈🏽)
        '\\x{1F448}\\x{1F3FE}', // E1.0   [1] (👈🏾)
        '\\x{1F448}\\x{1F3FF}', // E1.0   [1] (👈🏿)
        '\\x{1F449}\\x{1F3FB}', // E1.0   [1] (👉🏻)
        '\\x{1F449}\\x{1F3FC}', // E1.0   [1] (👉🏼)
        '\\x{1F449}\\x{1F3FD}', // E1.0   [1] (👉🏽)
        '\\x{1F449}\\x{1F3FE}', // E1.0   [1] (👉🏾)
        '\\x{1F449}\\x{1F3FF}', // E1.0   [1] (👉🏿)
        '\\x{1F44A}\\x{1F3FB}', // E1.0   [1] (👊🏻)
        '\\x{1F44A}\\x{1F3FC}', // E1.0   [1] (👊🏼)
        '\\x{1F44A}\\x{1F3FD}', // E1.0   [1] (👊🏽)
        '\\x{1F44A}\\x{1F3FE}', // E1.0   [1] (👊🏾)
        '\\x{1F44A}\\x{1F3FF}', // E1.0   [1] (👊🏿)
        '\\x{1F44B}\\x{1F3FB}', // E1.0   [1] (👋🏻)
        '\\x{1F44B}\\x{1F3FC}', // E1.0   [1] (👋🏼)
        '\\x{1F44B}\\x{1F3FD}', // E1.0   [1] (👋🏽)
        '\\x{1F44B}\\x{1F3FE}', // E1.0   [1] (👋🏾)
        '\\x{1F44B}\\x{1F3FF}', // E1.0   [1] (👋🏿)
        '\\x{1F44C}\\x{1F3FB}', // E1.0   [1] (👌🏻)
        '\\x{1F44C}\\x{1F3FC}', // E1.0   [1] (👌🏼)
        '\\x{1F44C}\\x{1F3FD}', // E1.0   [1] (👌🏽)
        '\\x{1F44C}\\x{1F3FE}', // E1.0   [1] (👌🏾)
        '\\x{1F44C}\\x{1F3FF}', // E1.0   [1] (👌🏿)
        '\\x{1F44D}\\x{1F3FB}', // E1.0   [1] (👍🏻)
        '\\x{1F44D}\\x{1F3FC}', // E1.0   [1] (👍🏼)
        '\\x{1F44D}\\x{1F3FD}', // E1.0   [1] (👍🏽)
        '\\x{1F44D}\\x{1F3FE}', // E1.0   [1] (👍🏾)
        '\\x{1F44D}\\x{1F3FF}', // E1.0   [1] (👍🏿)
        '\\x{1F44E}\\x{1F3FB}', // E1.0   [1] (👎🏻)
        '\\x{1F44E}\\x{1F3FC}', // E1.0   [1] (👎🏼)
        '\\x{1F44E}\\x{1F3FD}', // E1.0   [1] (👎🏽)
        '\\x{1F44E}\\x{1F3FE}', // E1.0   [1] (👎🏾)
        '\\x{1F44E}\\x{1F3FF}', // E1.0   [1] (👎🏿)
        '\\x{1F44F}\\x{1F3FB}', // E1.0   [1] (👏🏻)
        '\\x{1F44F}\\x{1F3FC}', // E1.0   [1] (👏🏼)
        '\\x{1F44F}\\x{1F3FD}', // E1.0   [1] (👏🏽)
        '\\x{1F44F}\\x{1F3FE}', // E1.0   [1] (👏🏾)
        '\\x{1F44F}\\x{1F3FF}', // E1.0   [1] (👏🏿)
        '\\x{1F450}\\x{1F3FB}', // E1.0   [1] (👐🏻)
        '\\x{1F450}\\x{1F3FC}', // E1.0   [1] (👐🏼)
        '\\x{1F450}\\x{1F3FD}', // E1.0   [1] (👐🏽)
        '\\x{1F450}\\x{1F3FE}', // E1.0   [1] (👐🏾)
        '\\x{1F450}\\x{1F3FF}', // E1.0   [1] (👐🏿)
        '\\x{1F466}\\x{1F3FB}', // E1.0   [1] (👦🏻)
        '\\x{1F466}\\x{1F3FC}', // E1.0   [1] (👦🏼)
        '\\x{1F466}\\x{1F3FD}', // E1.0   [1] (👦🏽)
        '\\x{1F466}\\x{1F3FE}', // E1.0   [1] (👦🏾)
        '\\x{1F466}\\x{1F3FF}', // E1.0   [1] (👦🏿)
        '\\x{1F467}\\x{1F3FB}', // E1.0   [1] (👧🏻)
        '\\x{1F467}\\x{1F3FC}', // E1.0   [1] (👧🏼)
        '\\x{1F467}\\x{1F3FD}', // E1.0   [1] (👧🏽)
        '\\x{1F467}\\x{1F3FE}', // E1.0   [1] (👧🏾)
        '\\x{1F467}\\x{1F3FF}', // E1.0   [1] (👧🏿)
        '\\x{1F468}\\x{1F3FB}', // E1.0   [1] (👨🏻)
        '\\x{1F468}\\x{1F3FC}', // E1.0   [1] (👨🏼)
        '\\x{1F468}\\x{1F3FD}', // E1.0   [1] (👨🏽)
        '\\x{1F468}\\x{1F3FE}', // E1.0   [1] (👨🏾)
        '\\x{1F468}\\x{1F3FF}', // E1.0   [1] (👨🏿)
        '\\x{1F469}\\x{1F3FB}', // E1.0   [1] (👩🏻)
        '\\x{1F469}\\x{1F3FC}', // E1.0   [1] (👩🏼)
        '\\x{1F469}\\x{1F3FD}', // E1.0   [1] (👩🏽)
        '\\x{1F469}\\x{1F3FE}', // E1.0   [1] (👩🏾)
        '\\x{1F469}\\x{1F3FF}', // E1.0   [1] (👩🏿)
        '\\x{1F46B}\\x{1F3FB}', // E12.0  [1] (👫🏻)
        '\\x{1F46B}\\x{1F3FC}', // E12.0  [1] (👫🏼)
        '\\x{1F46B}\\x{1F3FD}', // E12.0  [1] (👫🏽)
        '\\x{1F46B}\\x{1F3FE}', // E12.0  [1] (👫🏾)
        '\\x{1F46B}\\x{1F3FF}', // E12.0  [1] (👫🏿)
        '\\x{1F46C}\\x{1F3FB}', // E12.0  [1] (👬🏻)
        '\\x{1F46C}\\x{1F3FC}', // E12.0  [1] (👬🏼)
        '\\x{1F46C}\\x{1F3FD}', // E12.0  [1] (👬🏽)
        '\\x{1F46C}\\x{1F3FE}', // E12.0  [1] (👬🏾)
        '\\x{1F46C}\\x{1F3FF}', // E12.0  [1] (👬🏿)
        '\\x{1F46D}\\x{1F3FB}', // E12.0  [1] (👭🏻)
        '\\x{1F46D}\\x{1F3FC}', // E12.0  [1] (👭🏼)
        '\\x{1F46D}\\x{1F3FD}', // E12.0  [1] (👭🏽)
        '\\x{1F46D}\\x{1F3FE}', // E12.0  [1] (👭🏾)
        '\\x{1F46D}\\x{1F3FF}', // E12.0  [1] (👭🏿)
        '\\x{1F46E}\\x{1F3FB}', // E1.0   [1] (👮🏻)
        '\\x{1F46E}\\x{1F3FC}', // E1.0   [1] (👮🏼)
        '\\x{1F46E}\\x{1F3FD}', // E1.0   [1] (👮🏽)
        '\\x{1F46E}\\x{1F3FE}', // E1.0   [1] (👮🏾)
        '\\x{1F46E}\\x{1F3FF}', // E1.0   [1] (👮🏿)
        '\\x{1F470}\\x{1F3FB}', // E1.0   [1] (👰🏻)
        '\\x{1F470}\\x{1F3FC}', // E1.0   [1] (👰🏼)
        '\\x{1F470}\\x{1F3FD}', // E1.0   [1] (👰🏽)
        '\\x{1F470}\\x{1F3FE}', // E1.0   [1] (👰🏾)
        '\\x{1F470}\\x{1F3FF}', // E1.0   [1] (👰🏿)
        '\\x{1F471}\\x{1F3FB}', // E1.0   [1] (👱🏻)
        '\\x{1F471}\\x{1F3FC}', // E1.0   [1] (👱🏼)
        '\\x{1F471}\\x{1F3FD}', // E1.0   [1] (👱🏽)
        '\\x{1F471}\\x{1F3FE}', // E1.0   [1] (👱🏾)
        '\\x{1F471}\\x{1F3FF}', // E1.0   [1] (👱🏿)
        '\\x{1F472}\\x{1F3FB}', // E1.0   [1] (👲🏻)
        '\\x{1F472}\\x{1F3FC}', // E1.0   [1] (👲🏼)
        '\\x{1F472}\\x{1F3FD}', // E1.0   [1] (👲🏽)
        '\\x{1F472}\\x{1F3FE}', // E1.0   [1] (👲🏾)
        '\\x{1F472}\\x{1F3FF}', // E1.0   [1] (👲🏿)
        '\\x{1F473}\\x{1F3FB}', // E1.0   [1] (👳🏻)
        '\\x{1F473}\\x{1F3FC}', // E1.0   [1] (👳🏼)
        '\\x{1F473}\\x{1F3FD}', // E1.0   [1] (👳🏽)
        '\\x{1F473}\\x{1F3FE}', // E1.0   [1] (👳🏾)
        '\\x{1F473}\\x{1F3FF}', // E1.0   [1] (👳🏿)
        '\\x{1F474}\\x{1F3FB}', // E1.0   [1] (👴🏻)
        '\\x{1F474}\\x{1F3FC}', // E1.0   [1] (👴🏼)
        '\\x{1F474}\\x{1F3FD}', // E1.0   [1] (👴🏽)
        '\\x{1F474}\\x{1F3FE}', // E1.0   [1] (👴🏾)
        '\\x{1F474}\\x{1F3FF}', // E1.0   [1] (👴🏿)
        '\\x{1F475}\\x{1F3FB}', // E1.0   [1] (👵🏻)
        '\\x{1F475}\\x{1F3FC}', // E1.0   [1] (👵🏼)
        '\\x{1F475}\\x{1F3FD}', // E1.0   [1] (👵🏽)
        '\\x{1F475}\\x{1F3FE}', // E1.0   [1] (👵🏾)
        '\\x{1F475}\\x{1F3FF}', // E1.0   [1] (👵🏿)
        '\\x{1F476}\\x{1F3FB}', // E1.0   [1] (👶🏻)
        '\\x{1F476}\\x{1F3FC}', // E1.0   [1] (👶🏼)
        '\\x{1F476}\\x{1F3FD}', // E1.0   [1] (👶🏽)
        '\\x{1F476}\\x{1F3FE}', // E1.0   [1] (👶🏾)
        '\\x{1F476}\\x{1F3FF}', // E1.0   [1] (👶🏿)
        '\\x{1F477}\\x{1F3FB}', // E1.0   [1] (👷🏻)
        '\\x{1F477}\\x{1F3FC}', // E1.0   [1] (👷🏼)
        '\\x{1F477}\\x{1F3FD}', // E1.0   [1] (👷🏽)
        '\\x{1F477}\\x{1F3FE}', // E1.0   [1] (👷🏾)
        '\\x{1F477}\\x{1F3FF}', // E1.0   [1] (👷🏿)
        '\\x{1F478}\\x{1F3FB}', // E1.0   [1] (👸🏻)
        '\\x{1F478}\\x{1F3FC}', // E1.0   [1] (👸🏼)
        '\\x{1F478}\\x{1F3FD}', // E1.0   [1] (👸🏽)
        '\\x{1F478}\\x{1F3FE}', // E1.0   [1] (👸🏾)
        '\\x{1F478}\\x{1F3FF}', // E1.0   [1] (👸🏿)
        '\\x{1F47C}\\x{1F3FB}', // E1.0   [1] (👼🏻)
        '\\x{1F47C}\\x{1F3FC}', // E1.0   [1] (👼🏼)
        '\\x{1F47C}\\x{1F3FD}', // E1.0   [1] (👼🏽)
        '\\x{1F47C}\\x{1F3FE}', // E1.0   [1] (👼🏾)
        '\\x{1F47C}\\x{1F3FF}', // E1.0   [1] (👼🏿)
        '\\x{1F481}\\x{1F3FB}', // E1.0   [1] (💁🏻)
        '\\x{1F481}\\x{1F3FC}', // E1.0   [1] (💁🏼)
        '\\x{1F481}\\x{1F3FD}', // E1.0   [1] (💁🏽)
        '\\x{1F481}\\x{1F3FE}', // E1.0   [1] (💁🏾)
        '\\x{1F481}\\x{1F3FF}', // E1.0   [1] (💁🏿)
        '\\x{1F482}\\x{1F3FB}', // E1.0   [1] (💂🏻)
        '\\x{1F482}\\x{1F3FC}', // E1.0   [1] (💂🏼)
        '\\x{1F482}\\x{1F3FD}', // E1.0   [1] (💂🏽)
        '\\x{1F482}\\x{1F3FE}', // E1.0   [1] (💂🏾)
        '\\x{1F482}\\x{1F3FF}', // E1.0   [1] (💂🏿)
        '\\x{1F483}\\x{1F3FB}', // E1.0   [1] (💃🏻)
        '\\x{1F483}\\x{1F3FC}', // E1.0   [1] (💃🏼)
        '\\x{1F483}\\x{1F3FD}', // E1.0   [1] (💃🏽)
        '\\x{1F483}\\x{1F3FE}', // E1.0   [1] (💃🏾)
        '\\x{1F483}\\x{1F3FF}', // E1.0   [1] (💃🏿)
        '\\x{1F485}\\x{1F3FB}', // E1.0   [1] (💅🏻)
        '\\x{1F485}\\x{1F3FC}', // E1.0   [1] (💅🏼)
        '\\x{1F485}\\x{1F3FD}', // E1.0   [1] (💅🏽)
        '\\x{1F485}\\x{1F3FE}', // E1.0   [1] (💅🏾)
        '\\x{1F485}\\x{1F3FF}', // E1.0   [1] (💅🏿)
        '\\x{1F486}\\x{1F3FB}', // E1.0   [1] (💆🏻)
        '\\x{1F486}\\x{1F3FC}', // E1.0   [1] (💆🏼)
        '\\x{1F486}\\x{1F3FD}', // E1.0   [1] (💆🏽)
        '\\x{1F486}\\x{1F3FE}', // E1.0   [1] (💆🏾)
        '\\x{1F486}\\x{1F3FF}', // E1.0   [1] (💆🏿)
        '\\x{1F487}\\x{1F3FB}', // E1.0   [1] (💇🏻)
        '\\x{1F487}\\x{1F3FC}', // E1.0   [1] (💇🏼)
        '\\x{1F487}\\x{1F3FD}', // E1.0   [1] (💇🏽)
        '\\x{1F487}\\x{1F3FE}', // E1.0   [1] (💇🏾)
        '\\x{1F487}\\x{1F3FF}', // E1.0   [1] (💇🏿)
        '\\x{1F48F}\\x{1F3FB}', // E13.1  [1] (💏🏻)
        '\\x{1F48F}\\x{1F3FC}', // E13.1  [1] (💏🏼)
        '\\x{1F48F}\\x{1F3FD}', // E13.1  [1] (💏🏽)
        '\\x{1F48F}\\x{1F3FE}', // E13.1  [1] (💏🏾)
        '\\x{1F48F}\\x{1F3FF}', // E13.1  [1] (💏🏿)
        '\\x{1F491}\\x{1F3FB}', // E13.1  [1] (💑🏻)
        '\\x{1F491}\\x{1F3FC}', // E13.1  [1] (💑🏼)
        '\\x{1F491}\\x{1F3FD}', // E13.1  [1] (💑🏽)
        '\\x{1F491}\\x{1F3FE}', // E13.1  [1] (💑🏾)
        '\\x{1F491}\\x{1F3FF}', // E13.1  [1] (💑🏿)
        '\\x{1F4AA}\\x{1F3FB}', // E1.0   [1] (💪🏻)
        '\\x{1F4AA}\\x{1F3FC}', // E1.0   [1] (💪🏼)
        '\\x{1F4AA}\\x{1F3FD}', // E1.0   [1] (💪🏽)
        '\\x{1F4AA}\\x{1F3FE}', // E1.0   [1] (💪🏾)
        '\\x{1F4AA}\\x{1F3FF}', // E1.0   [1] (💪🏿)
        '\\x{1F4FD}\\x{FE0F}', // E0.7   [1] (📽️)
        '\\x{1F549}\\x{FE0F}', // E0.7   [1] (🕉️)
        '\\x{1F54A}\\x{FE0F}', // E0.7   [1] (🕊️)
        '\\x{1F56F}\\x{FE0F}', // E0.7   [1] (🕯️)
        '\\x{1F570}\\x{FE0F}', // E0.7   [1] (🕰️)
        '\\x{1F573}\\x{FE0F}', // E0.7   [1] (🕳️)
        '\\x{1F574}\\x{1F3FB}', // E4.0   [1] (🕴🏻)
        '\\x{1F574}\\x{1F3FC}', // E4.0   [1] (🕴🏼)
        '\\x{1F574}\\x{1F3FD}', // E4.0   [1] (🕴🏽)
        '\\x{1F574}\\x{1F3FE}', // E4.0   [1] (🕴🏾)
        '\\x{1F574}\\x{1F3FF}', // E4.0   [1] (🕴🏿)
        '\\x{1F574}\\x{FE0F}', // E0.7   [1] (🕴️)
        '\\x{1F575}\\x{1F3FB}', // E2.0   [1] (🕵🏻)
        '\\x{1F575}\\x{1F3FC}', // E2.0   [1] (🕵🏼)
        '\\x{1F575}\\x{1F3FD}', // E2.0   [1] (🕵🏽)
        '\\x{1F575}\\x{1F3FE}', // E2.0   [1] (🕵🏾)
        '\\x{1F575}\\x{1F3FF}', // E2.0   [1] (🕵🏿)
        '\\x{1F575}\\x{FE0F}', // E0.7   [1] (🕵️)
        '\\x{1F576}\\x{FE0F}', // E0.7   [1] (🕶️)
        '\\x{1F577}\\x{FE0F}', // E0.7   [1] (🕷️)
        '\\x{1F578}\\x{FE0F}', // E0.7   [1] (🕸️)
        '\\x{1F579}\\x{FE0F}', // E0.7   [1] (🕹️)
        '\\x{1F57A}\\x{1F3FB}', // E3.0   [1] (🕺🏻)
        '\\x{1F57A}\\x{1F3FC}', // E3.0   [1] (🕺🏼)
        '\\x{1F57A}\\x{1F3FD}', // E3.0   [1] (🕺🏽)
        '\\x{1F57A}\\x{1F3FE}', // E3.0   [1] (🕺🏾)
        '\\x{1F57A}\\x{1F3FF}', // E3.0   [1] (🕺🏿)
        '\\x{1F587}\\x{FE0F}', // E0.7   [1] (🖇️)
        '\\x{1F58A}\\x{FE0F}', // E0.7   [1] (🖊️)
        '\\x{1F58B}\\x{FE0F}', // E0.7   [1] (🖋️)
        '\\x{1F58C}\\x{FE0F}', // E0.7   [1] (🖌️)
        '\\x{1F58D}\\x{FE0F}', // E0.7   [1] (🖍️)
        '\\x{1F590}\\x{1F3FB}', // E1.0   [1] (🖐🏻)
        '\\x{1F590}\\x{1F3FC}', // E1.0   [1] (🖐🏼)
        '\\x{1F590}\\x{1F3FD}', // E1.0   [1] (🖐🏽)
        '\\x{1F590}\\x{1F3FE}', // E1.0   [1] (🖐🏾)
        '\\x{1F590}\\x{1F3FF}', // E1.0   [1] (🖐🏿)
        '\\x{1F590}\\x{FE0F}', // E0.7   [1] (🖐️)
        '\\x{1F595}\\x{1F3FB}', // E1.0   [1] (🖕🏻)
        '\\x{1F595}\\x{1F3FC}', // E1.0   [1] (🖕🏼)
        '\\x{1F595}\\x{1F3FD}', // E1.0   [1] (🖕🏽)
        '\\x{1F595}\\x{1F3FE}', // E1.0   [1] (🖕🏾)
        '\\x{1F595}\\x{1F3FF}', // E1.0   [1] (🖕🏿)
        '\\x{1F596}\\x{1F3FB}', // E1.0   [1] (🖖🏻)
        '\\x{1F596}\\x{1F3FC}', // E1.0   [1] (🖖🏼)
        '\\x{1F596}\\x{1F3FD}', // E1.0   [1] (🖖🏽)
        '\\x{1F596}\\x{1F3FE}', // E1.0   [1] (🖖🏾)
        '\\x{1F596}\\x{1F3FF}', // E1.0   [1] (🖖🏿)
        '\\x{1F5A5}\\x{FE0F}', // E0.7   [1] (🖥️)
        '\\x{1F5A8}\\x{FE0F}', // E0.7   [1] (🖨️)
        '\\x{1F5B1}\\x{FE0F}', // E0.7   [1] (🖱️)
        '\\x{1F5B2}\\x{FE0F}', // E0.7   [1] (🖲️)
        '\\x{1F5BC}\\x{FE0F}', // E0.7   [1] (🖼️)
        '\\x{1F5C2}\\x{FE0F}', // E0.7   [1] (🗂️)
        '\\x{1F5C3}\\x{FE0F}', // E0.7   [1] (🗃️)
        '\\x{1F5C4}\\x{FE0F}', // E0.7   [1] (🗄️)
        '\\x{1F5D1}\\x{FE0F}', // E0.7   [1] (🗑️)
        '\\x{1F5D2}\\x{FE0F}', // E0.7   [1] (🗒️)
        '\\x{1F5D3}\\x{FE0F}', // E0.7   [1] (🗓️)
        '\\x{1F5DC}\\x{FE0F}', // E0.7   [1] (🗜️)
        '\\x{1F5DD}\\x{FE0F}', // E0.7   [1] (🗝️)
        '\\x{1F5DE}\\x{FE0F}', // E0.7   [1] (🗞️)
        '\\x{1F5E1}\\x{FE0F}', // E0.7   [1] (🗡️)
        '\\x{1F5E3}\\x{FE0F}', // E0.7   [1] (🗣️)
        '\\x{1F5E8}\\x{FE0F}', // E2.0   [1] (🗨️)
        '\\x{1F5EF}\\x{FE0F}', // E0.7   [1] (🗯️)
        '\\x{1F5F3}\\x{FE0F}', // E0.7   [1] (🗳️)
        '\\x{1F5FA}\\x{FE0F}', // E0.7   [1] (🗺️)
        '\\x{1F645}\\x{1F3FB}', // E1.0   [1] (🙅🏻)
        '\\x{1F645}\\x{1F3FC}', // E1.0   [1] (🙅🏼)
        '\\x{1F645}\\x{1F3FD}', // E1.0   [1] (🙅🏽)
        '\\x{1F645}\\x{1F3FE}', // E1.0   [1] (🙅🏾)
        '\\x{1F645}\\x{1F3FF}', // E1.0   [1] (🙅🏿)
        '\\x{1F646}\\x{1F3FB}', // E1.0   [1] (🙆🏻)
        '\\x{1F646}\\x{1F3FC}', // E1.0   [1] (🙆🏼)
        '\\x{1F646}\\x{1F3FD}', // E1.0   [1] (🙆🏽)
        '\\x{1F646}\\x{1F3FE}', // E1.0   [1] (🙆🏾)
        '\\x{1F646}\\x{1F3FF}', // E1.0   [1] (🙆🏿)
        '\\x{1F647}\\x{1F3FB}', // E1.0   [1] (🙇🏻)
        '\\x{1F647}\\x{1F3FC}', // E1.0   [1] (🙇🏼)
        '\\x{1F647}\\x{1F3FD}', // E1.0   [1] (🙇🏽)
        '\\x{1F647}\\x{1F3FE}', // E1.0   [1] (🙇🏾)
        '\\x{1F647}\\x{1F3FF}', // E1.0   [1] (🙇🏿)
        '\\x{1F64B}\\x{1F3FB}', // E1.0   [1] (🙋🏻)
        '\\x{1F64B}\\x{1F3FC}', // E1.0   [1] (🙋🏼)
        '\\x{1F64B}\\x{1F3FD}', // E1.0   [1] (🙋🏽)
        '\\x{1F64B}\\x{1F3FE}', // E1.0   [1] (🙋🏾)
        '\\x{1F64B}\\x{1F3FF}', // E1.0   [1] (🙋🏿)
        '\\x{1F64C}\\x{1F3FB}', // E1.0   [1] (🙌🏻)
        '\\x{1F64C}\\x{1F3FC}', // E1.0   [1] (🙌🏼)
        '\\x{1F64C}\\x{1F3FD}', // E1.0   [1] (🙌🏽)
        '\\x{1F64C}\\x{1F3FE}', // E1.0   [1] (🙌🏾)
        '\\x{1F64C}\\x{1F3FF}', // E1.0   [1] (🙌🏿)
        '\\x{1F64D}\\x{1F3FB}', // E1.0   [1] (🙍🏻)
        '\\x{1F64D}\\x{1F3FC}', // E1.0   [1] (🙍🏼)
        '\\x{1F64D}\\x{1F3FD}', // E1.0   [1] (🙍🏽)
        '\\x{1F64D}\\x{1F3FE}', // E1.0   [1] (🙍🏾)
        '\\x{1F64D}\\x{1F3FF}', // E1.0   [1] (🙍🏿)
        '\\x{1F64E}\\x{1F3FB}', // E1.0   [1] (🙎🏻)
        '\\x{1F64E}\\x{1F3FC}', // E1.0   [1] (🙎🏼)
        '\\x{1F64E}\\x{1F3FD}', // E1.0   [1] (🙎🏽)
        '\\x{1F64E}\\x{1F3FE}', // E1.0   [1] (🙎🏾)
        '\\x{1F64E}\\x{1F3FF}', // E1.0   [1] (🙎🏿)
        '\\x{1F64F}\\x{1F3FB}', // E1.0   [1] (🙏🏻)
        '\\x{1F64F}\\x{1F3FC}', // E1.0   [1] (🙏🏼)
        '\\x{1F64F}\\x{1F3FD}', // E1.0   [1] (🙏🏽)
        '\\x{1F64F}\\x{1F3FE}', // E1.0   [1] (🙏🏾)
        '\\x{1F64F}\\x{1F3FF}', // E1.0   [1] (🙏🏿)
        '\\x{1F6A3}\\x{1F3FB}', // E1.0   [1] (🚣🏻)
        '\\x{1F6A3}\\x{1F3FC}', // E1.0   [1] (🚣🏼)
        '\\x{1F6A3}\\x{1F3FD}', // E1.0   [1] (🚣🏽)
        '\\x{1F6A3}\\x{1F3FE}', // E1.0   [1] (🚣🏾)
        '\\x{1F6A3}\\x{1F3FF}', // E1.0   [1] (🚣🏿)
        '\\x{1F6B4}\\x{1F3FB}', // E1.0   [1] (🚴🏻)
        '\\x{1F6B4}\\x{1F3FC}', // E1.0   [1] (🚴🏼)
        '\\x{1F6B4}\\x{1F3FD}', // E1.0   [1] (🚴🏽)
        '\\x{1F6B4}\\x{1F3FE}', // E1.0   [1] (🚴🏾)
        '\\x{1F6B4}\\x{1F3FF}', // E1.0   [1] (🚴🏿)
        '\\x{1F6B5}\\x{1F3FB}', // E1.0   [1] (🚵🏻)
        '\\x{1F6B5}\\x{1F3FC}', // E1.0   [1] (🚵🏼)
        '\\x{1F6B5}\\x{1F3FD}', // E1.0   [1] (🚵🏽)
        '\\x{1F6B5}\\x{1F3FE}', // E1.0   [1] (🚵🏾)
        '\\x{1F6B5}\\x{1F3FF}', // E1.0   [1] (🚵🏿)
        '\\x{1F6B6}\\x{1F3FB}', // E1.0   [1] (🚶🏻)
        '\\x{1F6B6}\\x{1F3FC}', // E1.0   [1] (🚶🏼)
        '\\x{1F6B6}\\x{1F3FD}', // E1.0   [1] (🚶🏽)
        '\\x{1F6B6}\\x{1F3FE}', // E1.0   [1] (🚶🏾)
        '\\x{1F6B6}\\x{1F3FF}', // E1.0   [1] (🚶🏿)
        '\\x{1F6C0}\\x{1F3FB}', // E1.0   [1] (🛀🏻)
        '\\x{1F6C0}\\x{1F3FC}', // E1.0   [1] (🛀🏼)
        '\\x{1F6C0}\\x{1F3FD}', // E1.0   [1] (🛀🏽)
        '\\x{1F6C0}\\x{1F3FE}', // E1.0   [1] (🛀🏾)
        '\\x{1F6C0}\\x{1F3FF}', // E1.0   [1] (🛀🏿)
        '\\x{1F6CB}\\x{FE0F}', // E0.7   [1] (🛋️)
        '\\x{1F6CC}\\x{1F3FB}', // E4.0   [1] (🛌🏻)
        '\\x{1F6CC}\\x{1F3FC}', // E4.0   [1] (🛌🏼)
        '\\x{1F6CC}\\x{1F3FD}', // E4.0   [1] (🛌🏽)
        '\\x{1F6CC}\\x{1F3FE}', // E4.0   [1] (🛌🏾)
        '\\x{1F6CC}\\x{1F3FF}', // E4.0   [1] (🛌🏿)
        '\\x{1F6CD}\\x{FE0F}', // E0.7   [1] (🛍️)
        '\\x{1F6CE}\\x{FE0F}', // E0.7   [1] (🛎️)
        '\\x{1F6CF}\\x{FE0F}', // E0.7   [1] (🛏️)
        '\\x{1F6E0}\\x{FE0F}', // E0.7   [1] (🛠️)
        '\\x{1F6E1}\\x{FE0F}', // E0.7   [1] (🛡️)
        '\\x{1F6E2}\\x{FE0F}', // E0.7   [1] (🛢️)
        '\\x{1F6E3}\\x{FE0F}', // E0.7   [1] (🛣️)
        '\\x{1F6E4}\\x{FE0F}', // E0.7   [1] (🛤️)
        '\\x{1F6E5}\\x{FE0F}', // E0.7   [1] (🛥️)
        '\\x{1F6E9}\\x{FE0F}', // E0.7   [1] (🛩️)
        '\\x{1F6F0}\\x{FE0F}', // E0.7   [1] (🛰️)
        '\\x{1F6F3}\\x{FE0F}', // E0.7   [1] (🛳️)
        '\\x{1F90C}\\x{1F3FB}', // E13.0  [1] (🤌🏻)
        '\\x{1F90C}\\x{1F3FC}', // E13.0  [1] (🤌🏼)
        '\\x{1F90C}\\x{1F3FD}', // E13.0  [1] (🤌🏽)
        '\\x{1F90C}\\x{1F3FE}', // E13.0  [1] (🤌🏾)
        '\\x{1F90C}\\x{1F3FF}', // E13.0  [1] (🤌🏿)
        '\\x{1F90F}\\x{1F3FB}', // E12.0  [1] (🤏🏻)
        '\\x{1F90F}\\x{1F3FC}', // E12.0  [1] (🤏🏼)
        '\\x{1F90F}\\x{1F3FD}', // E12.0  [1] (🤏🏽)
        '\\x{1F90F}\\x{1F3FE}', // E12.0  [1] (🤏🏾)
        '\\x{1F90F}\\x{1F3FF}', // E12.0  [1] (🤏🏿)
        '\\x{1F918}\\x{1F3FB}', // E1.0   [1] (🤘🏻)
        '\\x{1F918}\\x{1F3FC}', // E1.0   [1] (🤘🏼)
        '\\x{1F918}\\x{1F3FD}', // E1.0   [1] (🤘🏽)
        '\\x{1F918}\\x{1F3FE}', // E1.0   [1] (🤘🏾)
        '\\x{1F918}\\x{1F3FF}', // E1.0   [1] (🤘🏿)
        '\\x{1F919}\\x{1F3FB}', // E3.0   [1] (🤙🏻)
        '\\x{1F919}\\x{1F3FC}', // E3.0   [1] (🤙🏼)
        '\\x{1F919}\\x{1F3FD}', // E3.0   [1] (🤙🏽)
        '\\x{1F919}\\x{1F3FE}', // E3.0   [1] (🤙🏾)
        '\\x{1F919}\\x{1F3FF}', // E3.0   [1] (🤙🏿)
        '\\x{1F91A}\\x{1F3FB}', // E3.0   [1] (🤚🏻)
        '\\x{1F91A}\\x{1F3FC}', // E3.0   [1] (🤚🏼)
        '\\x{1F91A}\\x{1F3FD}', // E3.0   [1] (🤚🏽)
        '\\x{1F91A}\\x{1F3FE}', // E3.0   [1] (🤚🏾)
        '\\x{1F91A}\\x{1F3FF}', // E3.0   [1] (🤚🏿)
        '\\x{1F91B}\\x{1F3FB}', // E3.0   [1] (🤛🏻)
        '\\x{1F91B}\\x{1F3FC}', // E3.0   [1] (🤛🏼)
        '\\x{1F91B}\\x{1F3FD}', // E3.0   [1] (🤛🏽)
        '\\x{1F91B}\\x{1F3FE}', // E3.0   [1] (🤛🏾)
        '\\x{1F91B}\\x{1F3FF}', // E3.0   [1] (🤛🏿)
        '\\x{1F91C}\\x{1F3FB}', // E3.0   [1] (🤜🏻)
        '\\x{1F91C}\\x{1F3FC}', // E3.0   [1] (🤜🏼)
        '\\x{1F91C}\\x{1F3FD}', // E3.0   [1] (🤜🏽)
        '\\x{1F91C}\\x{1F3FE}', // E3.0   [1] (🤜🏾)
        '\\x{1F91C}\\x{1F3FF}', // E3.0   [1] (🤜🏿)
        '\\x{1F91E}\\x{1F3FB}', // E3.0   [1] (🤞🏻)
        '\\x{1F91E}\\x{1F3FC}', // E3.0   [1] (🤞🏼)
        '\\x{1F91E}\\x{1F3FD}', // E3.0   [1] (🤞🏽)
        '\\x{1F91E}\\x{1F3FE}', // E3.0   [1] (🤞🏾)
        '\\x{1F91E}\\x{1F3FF}', // E3.0   [1] (🤞🏿)
        '\\x{1F91F}\\x{1F3FB}', // E5.0   [1] (🤟🏻)
        '\\x{1F91F}\\x{1F3FC}', // E5.0   [1] (🤟🏼)
        '\\x{1F91F}\\x{1F3FD}', // E5.0   [1] (🤟🏽)
        '\\x{1F91F}\\x{1F3FE}', // E5.0   [1] (🤟🏾)
        '\\x{1F91F}\\x{1F3FF}', // E5.0   [1] (🤟🏿)
        '\\x{1F926}\\x{1F3FB}', // E3.0   [1] (🤦🏻)
        '\\x{1F926}\\x{1F3FC}', // E3.0   [1] (🤦🏼)
        '\\x{1F926}\\x{1F3FD}', // E3.0   [1] (🤦🏽)
        '\\x{1F926}\\x{1F3FE}', // E3.0   [1] (🤦🏾)
        '\\x{1F926}\\x{1F3FF}', // E3.0   [1] (🤦🏿)
        '\\x{1F930}\\x{1F3FB}', // E3.0   [1] (🤰🏻)
        '\\x{1F930}\\x{1F3FC}', // E3.0   [1] (🤰🏼)
        '\\x{1F930}\\x{1F3FD}', // E3.0   [1] (🤰🏽)
        '\\x{1F930}\\x{1F3FE}', // E3.0   [1] (🤰🏾)
        '\\x{1F930}\\x{1F3FF}', // E3.0   [1] (🤰🏿)
        '\\x{1F931}\\x{1F3FB}', // E5.0   [1] (🤱🏻)
        '\\x{1F931}\\x{1F3FC}', // E5.0   [1] (🤱🏼)
        '\\x{1F931}\\x{1F3FD}', // E5.0   [1] (🤱🏽)
        '\\x{1F931}\\x{1F3FE}', // E5.0   [1] (🤱🏾)
        '\\x{1F931}\\x{1F3FF}', // E5.0   [1] (🤱🏿)
        '\\x{1F932}\\x{1F3FB}', // E5.0   [1] (🤲🏻)
        '\\x{1F932}\\x{1F3FC}', // E5.0   [1] (🤲🏼)
        '\\x{1F932}\\x{1F3FD}', // E5.0   [1] (🤲🏽)
        '\\x{1F932}\\x{1F3FE}', // E5.0   [1] (🤲🏾)
        '\\x{1F932}\\x{1F3FF}', // E5.0   [1] (🤲🏿)
        '\\x{1F933}\\x{1F3FB}', // E3.0   [1] (🤳🏻)
        '\\x{1F933}\\x{1F3FC}', // E3.0   [1] (🤳🏼)
        '\\x{1F933}\\x{1F3FD}', // E3.0   [1] (🤳🏽)
        '\\x{1F933}\\x{1F3FE}', // E3.0   [1] (🤳🏾)
        '\\x{1F933}\\x{1F3FF}', // E3.0   [1] (🤳🏿)
        '\\x{1F934}\\x{1F3FB}', // E3.0   [1] (🤴🏻)
        '\\x{1F934}\\x{1F3FC}', // E3.0   [1] (🤴🏼)
        '\\x{1F934}\\x{1F3FD}', // E3.0   [1] (🤴🏽)
        '\\x{1F934}\\x{1F3FE}', // E3.0   [1] (🤴🏾)
        '\\x{1F934}\\x{1F3FF}', // E3.0   [1] (🤴🏿)
        '\\x{1F935}\\x{1F3FB}', // E3.0   [1] (🤵🏻)
        '\\x{1F935}\\x{1F3FC}', // E3.0   [1] (🤵🏼)
        '\\x{1F935}\\x{1F3FD}', // E3.0   [1] (🤵🏽)
        '\\x{1F935}\\x{1F3FE}', // E3.0   [1] (🤵🏾)
        '\\x{1F935}\\x{1F3FF}', // E3.0   [1] (🤵🏿)
        '\\x{1F936}\\x{1F3FB}', // E3.0   [1] (🤶🏻)
        '\\x{1F936}\\x{1F3FC}', // E3.0   [1] (🤶🏼)
        '\\x{1F936}\\x{1F3FD}', // E3.0   [1] (🤶🏽)
        '\\x{1F936}\\x{1F3FE}', // E3.0   [1] (🤶🏾)
        '\\x{1F936}\\x{1F3FF}', // E3.0   [1] (🤶🏿)
        '\\x{1F937}\\x{1F3FB}', // E3.0   [1] (🤷🏻)
        '\\x{1F937}\\x{1F3FC}', // E3.0   [1] (🤷🏼)
        '\\x{1F937}\\x{1F3FD}', // E3.0   [1] (🤷🏽)
        '\\x{1F937}\\x{1F3FE}', // E3.0   [1] (🤷🏾)
        '\\x{1F937}\\x{1F3FF}', // E3.0   [1] (🤷🏿)
        '\\x{1F938}\\x{1F3FB}', // E3.0   [1] (🤸🏻)
        '\\x{1F938}\\x{1F3FC}', // E3.0   [1] (🤸🏼)
        '\\x{1F938}\\x{1F3FD}', // E3.0   [1] (🤸🏽)
        '\\x{1F938}\\x{1F3FE}', // E3.0   [1] (🤸🏾)
        '\\x{1F938}\\x{1F3FF}', // E3.0   [1] (🤸🏿)
        '\\x{1F939}\\x{1F3FB}', // E3.0   [1] (🤹🏻)
        '\\x{1F939}\\x{1F3FC}', // E3.0   [1] (🤹🏼)
        '\\x{1F939}\\x{1F3FD}', // E3.0   [1] (🤹🏽)
        '\\x{1F939}\\x{1F3FE}', // E3.0   [1] (🤹🏾)
        '\\x{1F939}\\x{1F3FF}', // E3.0   [1] (🤹🏿)
        '\\x{1F93D}\\x{1F3FB}', // E3.0   [1] (🤽🏻)
        '\\x{1F93D}\\x{1F3FC}', // E3.0   [1] (🤽🏼)
        '\\x{1F93D}\\x{1F3FD}', // E3.0   [1] (🤽🏽)
        '\\x{1F93D}\\x{1F3FE}', // E3.0   [1] (🤽🏾)
        '\\x{1F93D}\\x{1F3FF}', // E3.0   [1] (🤽🏿)
        '\\x{1F93E}\\x{1F3FB}', // E3.0   [1] (🤾🏻)
        '\\x{1F93E}\\x{1F3FC}', // E3.0   [1] (🤾🏼)
        '\\x{1F93E}\\x{1F3FD}', // E3.0   [1] (🤾🏽)
        '\\x{1F93E}\\x{1F3FE}', // E3.0   [1] (🤾🏾)
        '\\x{1F93E}\\x{1F3FF}', // E3.0   [1] (🤾🏿)
        '\\x{1F977}\\x{1F3FB}', // E13.0  [1] (🥷🏻)
        '\\x{1F977}\\x{1F3FC}', // E13.0  [1] (🥷🏼)
        '\\x{1F977}\\x{1F3FD}', // E13.0  [1] (🥷🏽)
        '\\x{1F977}\\x{1F3FE}', // E13.0  [1] (🥷🏾)
        '\\x{1F977}\\x{1F3FF}', // E13.0  [1] (🥷🏿)
        '\\x{1F9B5}\\x{1F3FB}', // E11.0  [1] (🦵🏻)
        '\\x{1F9B5}\\x{1F3FC}', // E11.0  [1] (🦵🏼)
        '\\x{1F9B5}\\x{1F3FD}', // E11.0  [1] (🦵🏽)
        '\\x{1F9B5}\\x{1F3FE}', // E11.0  [1] (🦵🏾)
        '\\x{1F9B5}\\x{1F3FF}', // E11.0  [1] (🦵🏿)
        '\\x{1F9B6}\\x{1F3FB}', // E11.0  [1] (🦶🏻)
        '\\x{1F9B6}\\x{1F3FC}', // E11.0  [1] (🦶🏼)
        '\\x{1F9B6}\\x{1F3FD}', // E11.0  [1] (🦶🏽)
        '\\x{1F9B6}\\x{1F3FE}', // E11.0  [1] (🦶🏾)
        '\\x{1F9B6}\\x{1F3FF}', // E11.0  [1] (🦶🏿)
        '\\x{1F9B8}\\x{1F3FB}', // E11.0  [1] (🦸🏻)
        '\\x{1F9B8}\\x{1F3FC}', // E11.0  [1] (🦸🏼)
        '\\x{1F9B8}\\x{1F3FD}', // E11.0  [1] (🦸🏽)
        '\\x{1F9B8}\\x{1F3FE}', // E11.0  [1] (🦸🏾)
        '\\x{1F9B8}\\x{1F3FF}', // E11.0  [1] (🦸🏿)
        '\\x{1F9B9}\\x{1F3FB}', // E11.0  [1] (🦹🏻)
        '\\x{1F9B9}\\x{1F3FC}', // E11.0  [1] (🦹🏼)
        '\\x{1F9B9}\\x{1F3FD}', // E11.0  [1] (🦹🏽)
        '\\x{1F9B9}\\x{1F3FE}', // E11.0  [1] (🦹🏾)
        '\\x{1F9B9}\\x{1F3FF}', // E11.0  [1] (🦹🏿)
        '\\x{1F9BB}\\x{1F3FB}', // E12.0  [1] (🦻🏻)
        '\\x{1F9BB}\\x{1F3FC}', // E12.0  [1] (🦻🏼)
        '\\x{1F9BB}\\x{1F3FD}', // E12.0  [1] (🦻🏽)
        '\\x{1F9BB}\\x{1F3FE}', // E12.0  [1] (🦻🏾)
        '\\x{1F9BB}\\x{1F3FF}', // E12.0  [1] (🦻🏿)
        '\\x{1F9CD}\\x{1F3FB}', // E12.0  [1] (🧍🏻)
        '\\x{1F9CD}\\x{1F3FC}', // E12.0  [1] (🧍🏼)
        '\\x{1F9CD}\\x{1F3FD}', // E12.0  [1] (🧍🏽)
        '\\x{1F9CD}\\x{1F3FE}', // E12.0  [1] (🧍🏾)
        '\\x{1F9CD}\\x{1F3FF}', // E12.0  [1] (🧍🏿)
        '\\x{1F9CE}\\x{1F3FB}', // E12.0  [1] (🧎🏻)
        '\\x{1F9CE}\\x{1F3FC}', // E12.0  [1] (🧎🏼)
        '\\x{1F9CE}\\x{1F3FD}', // E12.0  [1] (🧎🏽)
        '\\x{1F9CE}\\x{1F3FE}', // E12.0  [1] (🧎🏾)
        '\\x{1F9CE}\\x{1F3FF}', // E12.0  [1] (🧎🏿)
        '\\x{1F9CF}\\x{1F3FB}', // E12.0  [1] (🧏🏻)
        '\\x{1F9CF}\\x{1F3FC}', // E12.0  [1] (🧏🏼)
        '\\x{1F9CF}\\x{1F3FD}', // E12.0  [1] (🧏🏽)
        '\\x{1F9CF}\\x{1F3FE}', // E12.0  [1] (🧏🏾)
        '\\x{1F9CF}\\x{1F3FF}', // E12.0  [1] (🧏🏿)
        '\\x{1F9D1}\\x{1F3FB}', // E5.0   [1] (🧑🏻)
        '\\x{1F9D1}\\x{1F3FC}', // E5.0   [1] (🧑🏼)
        '\\x{1F9D1}\\x{1F3FD}', // E5.0   [1] (🧑🏽)
        '\\x{1F9D1}\\x{1F3FE}', // E5.0   [1] (🧑🏾)
        '\\x{1F9D1}\\x{1F3FF}', // E5.0   [1] (🧑🏿)
        '\\x{1F9D2}\\x{1F3FB}', // E5.0   [1] (🧒🏻)
        '\\x{1F9D2}\\x{1F3FC}', // E5.0   [1] (🧒🏼)
        '\\x{1F9D2}\\x{1F3FD}', // E5.0   [1] (🧒🏽)
        '\\x{1F9D2}\\x{1F3FE}', // E5.0   [1] (🧒🏾)
        '\\x{1F9D2}\\x{1F3FF}', // E5.0   [1] (🧒🏿)
        '\\x{1F9D3}\\x{1F3FB}', // E5.0   [1] (🧓🏻)
        '\\x{1F9D3}\\x{1F3FC}', // E5.0   [1] (🧓🏼)
        '\\x{1F9D3}\\x{1F3FD}', // E5.0   [1] (🧓🏽)
        '\\x{1F9D3}\\x{1F3FE}', // E5.0   [1] (🧓🏾)
        '\\x{1F9D3}\\x{1F3FF}', // E5.0   [1] (🧓🏿)
        '\\x{1F9D4}\\x{1F3FB}', // E5.0   [1] (🧔🏻)
        '\\x{1F9D4}\\x{1F3FC}', // E5.0   [1] (🧔🏼)
        '\\x{1F9D4}\\x{1F3FD}', // E5.0   [1] (🧔🏽)
        '\\x{1F9D4}\\x{1F3FE}', // E5.0   [1] (🧔🏾)
        '\\x{1F9D4}\\x{1F3FF}', // E5.0   [1] (🧔🏿)
        '\\x{1F9D5}\\x{1F3FB}', // E5.0   [1] (🧕🏻)
        '\\x{1F9D5}\\x{1F3FC}', // E5.0   [1] (🧕🏼)
        '\\x{1F9D5}\\x{1F3FD}', // E5.0   [1] (🧕🏽)
        '\\x{1F9D5}\\x{1F3FE}', // E5.0   [1] (🧕🏾)
        '\\x{1F9D5}\\x{1F3FF}', // E5.0   [1] (🧕🏿)
        '\\x{1F9D6}\\x{1F3FB}', // E5.0   [1] (🧖🏻)
        '\\x{1F9D6}\\x{1F3FC}', // E5.0   [1] (🧖🏼)
        '\\x{1F9D6}\\x{1F3FD}', // E5.0   [1] (🧖🏽)
        '\\x{1F9D6}\\x{1F3FE}', // E5.0   [1] (🧖🏾)
        '\\x{1F9D6}\\x{1F3FF}', // E5.0   [1] (🧖🏿)
        '\\x{1F9D7}\\x{1F3FB}', // E5.0   [1] (🧗🏻)
        '\\x{1F9D7}\\x{1F3FC}', // E5.0   [1] (🧗🏼)
        '\\x{1F9D7}\\x{1F3FD}', // E5.0   [1] (🧗🏽)
        '\\x{1F9D7}\\x{1F3FE}', // E5.0   [1] (🧗🏾)
        '\\x{1F9D7}\\x{1F3FF}', // E5.0   [1] (🧗🏿)
        '\\x{1F9D8}\\x{1F3FB}', // E5.0   [1] (🧘🏻)
        '\\x{1F9D8}\\x{1F3FC}', // E5.0   [1] (🧘🏼)
        '\\x{1F9D8}\\x{1F3FD}', // E5.0   [1] (🧘🏽)
        '\\x{1F9D8}\\x{1F3FE}', // E5.0   [1] (🧘🏾)
        '\\x{1F9D8}\\x{1F3FF}', // E5.0   [1] (🧘🏿)
        '\\x{1F9D9}\\x{1F3FB}', // E5.0   [1] (🧙🏻)
        '\\x{1F9D9}\\x{1F3FC}', // E5.0   [1] (🧙🏼)
        '\\x{1F9D9}\\x{1F3FD}', // E5.0   [1] (🧙🏽)
        '\\x{1F9D9}\\x{1F3FE}', // E5.0   [1] (🧙🏾)
        '\\x{1F9D9}\\x{1F3FF}', // E5.0   [1] (🧙🏿)
        '\\x{1F9DA}\\x{1F3FB}', // E5.0   [1] (🧚🏻)
        '\\x{1F9DA}\\x{1F3FC}', // E5.0   [1] (🧚🏼)
        '\\x{1F9DA}\\x{1F3FD}', // E5.0   [1] (🧚🏽)
        '\\x{1F9DA}\\x{1F3FE}', // E5.0   [1] (🧚🏾)
        '\\x{1F9DA}\\x{1F3FF}', // E5.0   [1] (🧚🏿)
        '\\x{1F9DB}\\x{1F3FB}', // E5.0   [1] (🧛🏻)
        '\\x{1F9DB}\\x{1F3FC}', // E5.0   [1] (🧛🏼)
        '\\x{1F9DB}\\x{1F3FD}', // E5.0   [1] (🧛🏽)
        '\\x{1F9DB}\\x{1F3FE}', // E5.0   [1] (🧛🏾)
        '\\x{1F9DB}\\x{1F3FF}', // E5.0   [1] (🧛🏿)
        '\\x{1F9DC}\\x{1F3FB}', // E5.0   [1] (🧜🏻)
        '\\x{1F9DC}\\x{1F3FC}', // E5.0   [1] (🧜🏼)
        '\\x{1F9DC}\\x{1F3FD}', // E5.0   [1] (🧜🏽)
        '\\x{1F9DC}\\x{1F3FE}', // E5.0   [1] (🧜🏾)
        '\\x{1F9DC}\\x{1F3FF}', // E5.0   [1] (🧜🏿)
        '\\x{1F9DD}\\x{1F3FB}', // E5.0   [1] (🧝🏻)
        '\\x{1F9DD}\\x{1F3FC}', // E5.0   [1] (🧝🏼)
        '\\x{1F9DD}\\x{1F3FD}', // E5.0   [1] (🧝🏽)
        '\\x{1F9DD}\\x{1F3FE}', // E5.0   [1] (🧝🏾)
        '\\x{1F9DD}\\x{1F3FF}', // E5.0   [1] (🧝🏿)
        '\\x{203C}\\x{FE0F}', // E0.6   [1] (‼️)
        '\\x{2049}\\x{FE0F}', // E0.6   [1] (⁉️)
        '\\x{2122}\\x{FE0F}', // E0.6   [1] (™️)
        '\\x{2139}\\x{FE0F}', // E0.6   [1] (ℹ️)
        '\\x{2194}\\x{FE0F}', // E0.6   [1] (↔️)
        '\\x{2195}\\x{FE0F}', // E0.6   [1] (↕️)
        '\\x{2196}\\x{FE0F}', // E0.6   [1] (↖️)
        '\\x{2197}\\x{FE0F}', // E0.6   [1] (↗️)
        '\\x{2198}\\x{FE0F}', // E0.6   [1] (↘️)
        '\\x{2199}\\x{FE0F}', // E0.6   [1] (↙️)
        '\\x{21A9}\\x{FE0F}', // E0.6   [1] (↩️)
        '\\x{21AA}\\x{FE0F}', // E0.6   [1] (↪️)
        '\\x{2328}\\x{FE0F}', // E1.0   [1] (⌨️)
        '\\x{23CF}\\x{FE0F}', // E1.0   [1] (⏏️)
        '\\x{23ED}\\x{FE0F}', // E0.7   [1] (⏭️)
        '\\x{23EE}\\x{FE0F}', // E0.7   [1] (⏮️)
        '\\x{23EF}\\x{FE0F}', // E1.0   [1] (⏯️)
        '\\x{23F1}\\x{FE0F}', // E1.0   [1] (⏱️)
        '\\x{23F2}\\x{FE0F}', // E1.0   [1] (⏲️)
        '\\x{23F8}\\x{FE0F}', // E0.7   [1] (⏸️)
        '\\x{23F9}\\x{FE0F}', // E0.7   [1] (⏹️)
        '\\x{23FA}\\x{FE0F}', // E0.7   [1] (⏺️)
        '\\x{24C2}\\x{FE0F}', // E0.6   [1] (Ⓜ️)
        '\\x{25AA}\\x{FE0F}', // E0.6   [1] (▪️)
        '\\x{25AB}\\x{FE0F}', // E0.6   [1] (▫️)
        '\\x{25B6}\\x{FE0F}', // E0.6   [1] (▶️)
        '\\x{25C0}\\x{FE0F}', // E0.6   [1] (◀️)
        '\\x{25FB}\\x{FE0F}', // E0.6   [1] (◻️)
        '\\x{25FC}\\x{FE0F}', // E0.6   [1] (◼️)
        '\\x{2600}\\x{FE0F}', // E0.6   [1] (☀️)
        '\\x{2601}\\x{FE0F}', // E0.6   [1] (☁️)
        '\\x{2602}\\x{FE0F}', // E0.7   [1] (☂️)
        '\\x{2603}\\x{FE0F}', // E0.7   [1] (☃️)
        '\\x{2604}\\x{FE0F}', // E1.0   [1] (☄️)
        '\\x{260E}\\x{FE0F}', // E0.6   [1] (☎️)
        '\\x{2611}\\x{FE0F}', // E0.6   [1] (☑️)
        '\\x{2618}\\x{FE0F}', // E1.0   [1] (☘️)
        '\\x{261D}\\x{1F3FB}', // E1.0   [1] (☝🏻)
        '\\x{261D}\\x{1F3FC}', // E1.0   [1] (☝🏼)
        '\\x{261D}\\x{1F3FD}', // E1.0   [1] (☝🏽)
        '\\x{261D}\\x{1F3FE}', // E1.0   [1] (☝🏾)
        '\\x{261D}\\x{1F3FF}', // E1.0   [1] (☝🏿)
        '\\x{261D}\\x{FE0F}', // E0.6   [1] (☝️)
        '\\x{2620}\\x{FE0F}', // E1.0   [1] (☠️)
        '\\x{2622}\\x{FE0F}', // E1.0   [1] (☢️)
        '\\x{2623}\\x{FE0F}', // E1.0   [1] (☣️)
        '\\x{2626}\\x{FE0F}', // E1.0   [1] (☦️)
        '\\x{262A}\\x{FE0F}', // E0.7   [1] (☪️)
        '\\x{262E}\\x{FE0F}', // E1.0   [1] (☮️)
        '\\x{262F}\\x{FE0F}', // E0.7   [1] (☯️)
        '\\x{2638}\\x{FE0F}', // E0.7   [1] (☸️)
        '\\x{2639}\\x{FE0F}', // E0.7   [1] (☹️)
        '\\x{263A}\\x{FE0F}', // E0.6   [1] (☺️)
        '\\x{2640}\\x{FE0F}', // E4.0   [1] (♀️)
        '\\x{2642}\\x{FE0F}', // E4.0   [1] (♂️)
        '\\x{265F}\\x{FE0F}', // E11.0  [1] (♟️)
        '\\x{2660}\\x{FE0F}', // E0.6   [1] (♠️)
        '\\x{2663}\\x{FE0F}', // E0.6   [1] (♣️)
        '\\x{2665}\\x{FE0F}', // E0.6   [1] (♥️)
        '\\x{2666}\\x{FE0F}', // E0.6   [1] (♦️)
        '\\x{2668}\\x{FE0F}', // E0.6   [1] (♨️)
        '\\x{267B}\\x{FE0F}', // E0.6   [1] (♻️)
        '\\x{267E}\\x{FE0F}', // E11.0  [1] (♾️)
        '\\x{2692}\\x{FE0F}', // E1.0   [1] (⚒️)
        '\\x{2694}\\x{FE0F}', // E1.0   [1] (⚔️)
        '\\x{2695}\\x{FE0F}', // E4.0   [1] (⚕️)
        '\\x{2696}\\x{FE0F}', // E1.0   [1] (⚖️)
        '\\x{2697}\\x{FE0F}', // E1.0   [1] (⚗️)
        '\\x{2699}\\x{FE0F}', // E1.0   [1] (⚙️)
        '\\x{269B}\\x{FE0F}', // E1.0   [1] (⚛️)
        '\\x{269C}\\x{FE0F}', // E1.0   [1] (⚜️)
        '\\x{26A0}\\x{FE0F}', // E0.6   [1] (⚠️)
        '\\x{26A7}\\x{FE0F}', // E13.0  [1] (⚧️)
        '\\x{26B0}\\x{FE0F}', // E1.0   [1] (⚰️)
        '\\x{26B1}\\x{FE0F}', // E1.0   [1] (⚱️)
        '\\x{26C8}\\x{FE0F}', // E0.7   [1] (⛈️)
        '\\x{26CF}\\x{FE0F}', // E0.7   [1] (⛏️)
        '\\x{26D1}\\x{FE0F}', // E0.7   [1] (⛑️)
        '\\x{26D3}\\x{FE0F}', // E0.7   [1] (⛓️)
        '\\x{26E9}\\x{FE0F}', // E0.7   [1] (⛩️)
        '\\x{26F0}\\x{FE0F}', // E0.7   [1] (⛰️)
        '\\x{26F1}\\x{FE0F}', // E0.7   [1] (⛱️)
        '\\x{26F4}\\x{FE0F}', // E0.7   [1] (⛴️)
        '\\x{26F7}\\x{FE0F}', // E0.7   [1] (⛷️)
        '\\x{26F8}\\x{FE0F}', // E0.7   [1] (⛸️)
        '\\x{26F9}\\x{1F3FB}', // E2.0   [1] (⛹🏻)
        '\\x{26F9}\\x{1F3FC}', // E2.0   [1] (⛹🏼)
        '\\x{26F9}\\x{1F3FD}', // E2.0   [1] (⛹🏽)
        '\\x{26F9}\\x{1F3FE}', // E2.0   [1] (⛹🏾)
        '\\x{26F9}\\x{1F3FF}', // E2.0   [1] (⛹🏿)
        '\\x{26F9}\\x{FE0F}', // E0.7   [1] (⛹️)
        '\\x{2702}\\x{FE0F}', // E0.6   [1] (✂️)
        '\\x{2708}\\x{FE0F}', // E0.6   [1] (✈️)
        '\\x{2709}\\x{FE0F}', // E0.6   [1] (✉️)
        '\\x{270A}\\x{1F3FB}', // E1.0   [1] (✊🏻)
        '\\x{270A}\\x{1F3FC}', // E1.0   [1] (✊🏼)
        '\\x{270A}\\x{1F3FD}', // E1.0   [1] (✊🏽)
        '\\x{270A}\\x{1F3FE}', // E1.0   [1] (✊🏾)
        '\\x{270A}\\x{1F3FF}', // E1.0   [1] (✊🏿)
        '\\x{270B}\\x{1F3FB}', // E1.0   [1] (✋🏻)
        '\\x{270B}\\x{1F3FC}', // E1.0   [1] (✋🏼)
        '\\x{270B}\\x{1F3FD}', // E1.0   [1] (✋🏽)
        '\\x{270B}\\x{1F3FE}', // E1.0   [1] (✋🏾)
        '\\x{270B}\\x{1F3FF}', // E1.0   [1] (✋🏿)
        '\\x{270C}\\x{1F3FB}', // E1.0   [1] (✌🏻)
        '\\x{270C}\\x{1F3FC}', // E1.0   [1] (✌🏼)
        '\\x{270C}\\x{1F3FD}', // E1.0   [1] (✌🏽)
        '\\x{270C}\\x{1F3FE}', // E1.0   [1] (✌🏾)
        '\\x{270C}\\x{1F3FF}', // E1.0   [1] (✌🏿)
        '\\x{270C}\\x{FE0F}', // E0.6   [1] (✌️)
        '\\x{270D}\\x{1F3FB}', // E1.0   [1] (✍🏻)
        '\\x{270D}\\x{1F3FC}', // E1.0   [1] (✍🏼)
        '\\x{270D}\\x{1F3FD}', // E1.0   [1] (✍🏽)
        '\\x{270D}\\x{1F3FE}', // E1.0   [1] (✍🏾)
        '\\x{270D}\\x{1F3FF}', // E1.0   [1] (✍🏿)
        '\\x{270D}\\x{FE0F}', // E0.7   [1] (✍️)
        '\\x{270F}\\x{FE0F}', // E0.6   [1] (✏️)
        '\\x{2712}\\x{FE0F}', // E0.6   [1] (✒️)
        '\\x{2714}\\x{FE0F}', // E0.6   [1] (✔️)
        '\\x{2716}\\x{FE0F}', // E0.6   [1] (✖️)
        '\\x{271D}\\x{FE0F}', // E0.7   [1] (✝️)
        '\\x{2721}\\x{FE0F}', // E0.7   [1] (✡️)
        '\\x{2733}\\x{FE0F}', // E0.6   [1] (✳️)
        '\\x{2734}\\x{FE0F}', // E0.6   [1] (✴️)
        '\\x{2744}\\x{FE0F}', // E0.6   [1] (❄️)
        '\\x{2747}\\x{FE0F}', // E0.6   [1] (❇️)
        '\\x{2763}\\x{FE0F}', // E1.0   [1] (❣️)
        '\\x{2764}\\x{FE0F}', // E0.6   [1] (❤️)
        '\\x{27A1}\\x{FE0F}', // E0.6   [1] (➡️)
        '\\x{2934}\\x{FE0F}', // E0.6   [1] (⤴️)
        '\\x{2935}\\x{FE0F}', // E0.6   [1] (⤵️)
        '\\x{2B05}\\x{FE0F}', // E0.6   [1] (⬅️)
        '\\x{2B06}\\x{FE0F}', // E0.6   [1] (⬆️)
        '\\x{2B07}\\x{FE0F}', // E0.6   [1] (⬇️)
        '\\x{3030}\\x{FE0F}', // E0.6   [1] (〰️)
        '\\x{303D}\\x{FE0F}', // E0.6   [1] (〽️)
        '\\x{3297}\\x{FE0F}', // E0.6   [1] (㊗️)
        '\\x{3299}\\x{FE0F}', // E0.6   [1] (㊙️)
        '\\x{1F004}', // E0.6   [1] (🀄)
        '\\x{1F0CF}', // E0.6   [1] (🃏)
        '\\x{1F18E}', // E0.6   [1] (🆎)
        '[\\x{1F191}-\\x{1F19A}]', // E0.6  [10] (🆑..🆚)
        '\\x{1F201}', // E0.6   [1] (🈁)
        '\\x{1F21A}', // E0.6   [1] (🈚)
        '\\x{1F22F}', // E0.6   [1] (🈯)
        '[\\x{1F232}-\\x{1F236}]', // E0.6   [5] (🈲..🈶)
        '[\\x{1F238}-\\x{1F23A}]', // E0.6   [3] (🈸..🈺)
        '[\\x{1F250}-\\x{1F251}]', // E0.6   [2] (🉐..🉑)
        '[\\x{1F300}-\\x{1F30C}]', // E0.6  [13] (🌀..🌌)
        '[\\x{1F30D}-\\x{1F30E}]', // E0.7   [2] (🌍..🌎)
        '\\x{1F30F}', // E0.6   [1] (🌏)
        '\\x{1F310}', // E1.0   [1] (🌐)
        '\\x{1F311}', // E0.6   [1] (🌑)
        '\\x{1F312}', // E1.0   [1] (🌒)
        '[\\x{1F313}-\\x{1F315}]', // E0.6   [3] (🌓..🌕)
        '[\\x{1F316}-\\x{1F318}]', // E1.0   [3] (🌖..🌘)
        '\\x{1F319}', // E0.6   [1] (🌙)
        '\\x{1F31A}', // E1.0   [1] (🌚)
        '\\x{1F31B}', // E0.6   [1] (🌛)
        '\\x{1F31C}', // E0.7   [1] (🌜)
        '[\\x{1F31D}-\\x{1F31E}]', // E1.0   [2] (🌝..🌞)
        '[\\x{1F31F}-\\x{1F320}]', // E0.6   [2] (🌟..🌠)
        '[\\x{1F32D}-\\x{1F32F}]', // E1.0   [3] (🌭..🌯)
        '[\\x{1F330}-\\x{1F331}]', // E0.6   [2] (🌰..🌱)
        '[\\x{1F332}-\\x{1F333}]', // E1.0   [2] (🌲..🌳)
        '[\\x{1F334}-\\x{1F335}]', // E0.6   [2] (🌴..🌵)
        '[\\x{1F337}-\\x{1F34A}]', // E0.6  [20] (🌷..🍊)
        '\\x{1F34B}', // E1.0   [1] (🍋)
        '[\\x{1F34C}-\\x{1F34F}]', // E0.6   [4] (🍌..🍏)
        '\\x{1F350}', // E1.0   [1] (🍐)
        '[\\x{1F351}-\\x{1F37B}]', // E0.6  [43] (🍑..🍻)
        '\\x{1F37C}', // E1.0   [1] (🍼)
        '[\\x{1F37E}-\\x{1F37F}]', // E1.0   [2] (🍾..🍿)
        '[\\x{1F380}-\\x{1F393}]', // E0.6  [20] (🎀..🎓)
        '[\\x{1F3A0}-\\x{1F3C4}]', // E0.6  [37] (🎠..🏄)
        '\\x{1F3C5}', // E1.0   [1] (🏅)
        '\\x{1F3C6}', // E0.6   [1] (🏆)
        '\\x{1F3C7}', // E1.0   [1] (🏇)
        '\\x{1F3C8}', // E0.6   [1] (🏈)
        '\\x{1F3C9}', // E1.0   [1] (🏉)
        '\\x{1F3CA}', // E0.6   [1] (🏊)
        '[\\x{1F3CF}-\\x{1F3D3}]', // E1.0   [5] (🏏..🏓)
        '[\\x{1F3E0}-\\x{1F3E3}]', // E0.6   [4] (🏠..🏣)
        '\\x{1F3E4}', // E1.0   [1] (🏤)
        '[\\x{1F3E5}-\\x{1F3F0}]', // E0.6  [12] (🏥..🏰)
        '\\x{1F3F4}', // E1.0   [1] (🏴)
        '[\\x{1F3F8}-\\x{1F407}]', // E1.0  [16] (🏸..🐇)
        '\\x{1F408}', // E0.7   [1] (🐈)
        '[\\x{1F409}-\\x{1F40B}]', // E1.0   [3] (🐉..🐋)
        '[\\x{1F40C}-\\x{1F40E}]', // E0.6   [3] (🐌..🐎)
        '[\\x{1F40F}-\\x{1F410}]', // E1.0   [2] (🐏..🐐)
        '[\\x{1F411}-\\x{1F412}]', // E0.6   [2] (🐑..🐒)
        '\\x{1F413}', // E1.0   [1] (🐓)
        '\\x{1F414}', // E0.6   [1] (🐔)
        '\\x{1F415}', // E0.7   [1] (🐕)
        '\\x{1F416}', // E1.0   [1] (🐖)
        '[\\x{1F417}-\\x{1F429}]', // E0.6  [19] (🐗..🐩)
        '\\x{1F42A}', // E1.0   [1] (🐪)
        '[\\x{1F42B}-\\x{1F43E}]', // E0.6  [20] (🐫..🐾)
        '\\x{1F440}', // E0.6   [1] (👀)
        '[\\x{1F442}-\\x{1F464}]', // E0.6  [35] (👂..👤)
        '\\x{1F465}', // E1.0   [1] (👥)
        '[\\x{1F466}-\\x{1F46B}]', // E0.6   [6] (👦..👫)
        '[\\x{1F46C}-\\x{1F46D}]', // E1.0   [2] (👬..👭)
        '[\\x{1F46E}-\\x{1F4AC}]', // E0.6  [63] (👮..💬)
        '\\x{1F4AD}', // E1.0   [1] (💭)
        '[\\x{1F4AE}-\\x{1F4B5}]', // E0.6   [8] (💮..💵)
        '[\\x{1F4B6}-\\x{1F4B7}]', // E1.0   [2] (💶..💷)
        '[\\x{1F4B8}-\\x{1F4EB}]', // E0.6  [52] (💸..📫)
        '[\\x{1F4EC}-\\x{1F4ED}]', // E0.7   [2] (📬..📭)
        '\\x{1F4EE}', // E0.6   [1] (📮)
        '\\x{1F4EF}', // E1.0   [1] (📯)
        '[\\x{1F4F0}-\\x{1F4F4}]', // E0.6   [5] (📰..📴)
        '\\x{1F4F5}', // E1.0   [1] (📵)
        '[\\x{1F4F6}-\\x{1F4F7}]', // E0.6   [2] (📶..📷)
        '\\x{1F4F8}', // E1.0   [1] (📸)
        '[\\x{1F4F9}-\\x{1F4FC}]', // E0.6   [4] (📹..📼)
        '[\\x{1F4FF}-\\x{1F502}]', // E1.0   [4] (📿..🔂)
        '\\x{1F503}', // E0.6   [1] (🔃)
        '[\\x{1F504}-\\x{1F507}]', // E1.0   [4] (🔄..🔇)
        '\\x{1F508}', // E0.7   [1] (🔈)
        '\\x{1F509}', // E1.0   [1] (🔉)
        '[\\x{1F50A}-\\x{1F514}]', // E0.6  [11] (🔊..🔔)
        '\\x{1F515}', // E1.0   [1] (🔕)
        '[\\x{1F516}-\\x{1F52B}]', // E0.6  [22] (🔖..🔫)
        '[\\x{1F52C}-\\x{1F52D}]', // E1.0   [2] (🔬..🔭)
        '[\\x{1F52E}-\\x{1F53D}]', // E0.6  [16] (🔮..🔽)
        '[\\x{1F54B}-\\x{1F54E}]', // E1.0   [4] (🕋..🕎)
        '[\\x{1F550}-\\x{1F55B}]', // E0.6  [12] (🕐..🕛)
        '[\\x{1F55C}-\\x{1F567}]', // E0.7  [12] (🕜..🕧)
        '\\x{1F57A}', // E3.0   [1] (🕺)
        '[\\x{1F595}-\\x{1F596}]', // E1.0   [2] (🖕..🖖)
        '\\x{1F5A4}', // E3.0   [1] (🖤)
        '[\\x{1F5FB}-\\x{1F5FF}]', // E0.6   [5] (🗻..🗿)
        '\\x{1F600}', // E1.0   [1] (😀)
        '[\\x{1F601}-\\x{1F606}]', // E0.6   [6] (😁..😆)
        '[\\x{1F607}-\\x{1F608}]', // E1.0   [2] (😇..😈)
        '[\\x{1F609}-\\x{1F60D}]', // E0.6   [5] (😉..😍)
        '\\x{1F60E}', // E1.0   [1] (😎)
        '\\x{1F60F}', // E0.6   [1] (😏)
        '\\x{1F610}', // E0.7   [1] (😐)
        '\\x{1F611}', // E1.0   [1] (😑)
        '[\\x{1F612}-\\x{1F614}]', // E0.6   [3] (😒..😔)
        '\\x{1F615}', // E1.0   [1] (😕)
        '\\x{1F616}', // E0.6   [1] (😖)
        '\\x{1F617}', // E1.0   [1] (😗)
        '\\x{1F618}', // E0.6   [1] (😘)
        '\\x{1F619}', // E1.0   [1] (😙)
        '\\x{1F61A}', // E0.6   [1] (😚)
        '\\x{1F61B}', // E1.0   [1] (😛)
        '[\\x{1F61C}-\\x{1F61E}]', // E0.6   [3] (😜..😞)
        '\\x{1F61F}', // E1.0   [1] (😟)
        '[\\x{1F620}-\\x{1F625}]', // E0.6   [6] (😠..😥)
        '[\\x{1F626}-\\x{1F627}]', // E1.0   [2] (😦..😧)
        '[\\x{1F628}-\\x{1F62B}]', // E0.6   [4] (😨..😫)
        '\\x{1F62C}', // E1.0   [1] (😬)
        '\\x{1F62D}', // E0.6   [1] (😭)
        '[\\x{1F62E}-\\x{1F62F}]', // E1.0   [2] (😮..😯)
        '[\\x{1F630}-\\x{1F633}]', // E0.6   [4] (😰..😳)
        '\\x{1F634}', // E1.0   [1] (😴)
        '\\x{1F635}', // E0.6   [1] (😵)
        '\\x{1F636}', // E1.0   [1] (😶)
        '[\\x{1F637}-\\x{1F640}]', // E0.6  [10] (😷..🙀)
        '[\\x{1F641}-\\x{1F644}]', // E1.0   [4] (🙁..🙄)
        '[\\x{1F645}-\\x{1F64F}]', // E0.6  [11] (🙅..🙏)
        '\\x{1F680}', // E0.6   [1] (🚀)
        '[\\x{1F681}-\\x{1F682}]', // E1.0   [2] (🚁..🚂)
        '[\\x{1F683}-\\x{1F685}]', // E0.6   [3] (🚃..🚅)
        '\\x{1F686}', // E1.0   [1] (🚆)
        '\\x{1F687}', // E0.6   [1] (🚇)
        '\\x{1F688}', // E1.0   [1] (🚈)
        '\\x{1F689}', // E0.6   [1] (🚉)
        '[\\x{1F68A}-\\x{1F68B}]', // E1.0   [2] (🚊..🚋)
        '\\x{1F68C}', // E0.6   [1] (🚌)
        '\\x{1F68D}', // E0.7   [1] (🚍)
        '\\x{1F68E}', // E1.0   [1] (🚎)
        '\\x{1F68F}', // E0.6   [1] (🚏)
        '\\x{1F690}', // E1.0   [1] (🚐)
        '[\\x{1F691}-\\x{1F693}]', // E0.6   [3] (🚑..🚓)
        '\\x{1F694}', // E0.7   [1] (🚔)
        '\\x{1F695}', // E0.6   [1] (🚕)
        '\\x{1F696}', // E1.0   [1] (🚖)
        '\\x{1F697}', // E0.6   [1] (🚗)
        '\\x{1F698}', // E0.7   [1] (🚘)
        '[\\x{1F699}-\\x{1F69A}]', // E0.6   [2] (🚙..🚚)
        '[\\x{1F69B}-\\x{1F6A1}]', // E1.0   [7] (🚛..🚡)
        '\\x{1F6A2}', // E0.6   [1] (🚢)
        '\\x{1F6A3}', // E1.0   [1] (🚣)
        '[\\x{1F6A4}-\\x{1F6A5}]', // E0.6   [2] (🚤..🚥)
        '\\x{1F6A6}', // E1.0   [1] (🚦)
        '[\\x{1F6A7}-\\x{1F6AD}]', // E0.6   [7] (🚧..🚭)
        '[\\x{1F6AE}-\\x{1F6B1}]', // E1.0   [4] (🚮..🚱)
        '\\x{1F6B2}', // E0.6   [1] (🚲)
        '[\\x{1F6B3}-\\x{1F6B5}]', // E1.0   [3] (🚳..🚵)
        '\\x{1F6B6}', // E0.6   [1] (🚶)
        '[\\x{1F6B7}-\\x{1F6B8}]', // E1.0   [2] (🚷..🚸)
        '[\\x{1F6B9}-\\x{1F6BE}]', // E0.6   [6] (🚹..🚾)
        '\\x{1F6BF}', // E1.0   [1] (🚿)
        '\\x{1F6C0}', // E0.6   [1] (🛀)
        '[\\x{1F6C1}-\\x{1F6C5}]', // E1.0   [5] (🛁..🛅)
        '\\x{1F6CC}', // E1.0   [1] (🛌)
        '\\x{1F6D0}', // E1.0   [1] (🛐)
        '[\\x{1F6D1}-\\x{1F6D2}]', // E3.0   [2] (🛑..🛒)
        '\\x{1F6D5}', // E12.0  [1] (🛕)
        '[\\x{1F6D6}-\\x{1F6D7}]', // E13.0  [2] (🛖..🛗)
        '[\\x{1F6EB}-\\x{1F6EC}]', // E1.0   [2] (🛫..🛬)
        '[\\x{1F6F4}-\\x{1F6F6}]', // E3.0   [3] (🛴..🛶)
        '[\\x{1F6F7}-\\x{1F6F8}]', // E5.0   [2] (🛷..🛸)
        '\\x{1F6F9}', // E11.0  [1] (🛹)
        '\\x{1F6FA}', // E12.0  [1] (🛺)
        '[\\x{1F6FB}-\\x{1F6FC}]', // E13.0  [2] (🛻..🛼)
        '[\\x{1F7E0}-\\x{1F7EB}]', // E12.0 [12] (🟠..🟫)
        '\\x{1F90C}', // E13.0  [1] (🤌)
        '[\\x{1F90D}-\\x{1F90F}]', // E12.0  [3] (🤍..🤏)
        '[\\x{1F910}-\\x{1F918}]', // E1.0   [9] (🤐..🤘)
        '[\\x{1F919}-\\x{1F91E}]', // E3.0   [6] (🤙..🤞)
        '\\x{1F91F}', // E5.0   [1] (🤟)
        '[\\x{1F920}-\\x{1F927}]', // E3.0   [8] (🤠..🤧)
        '[\\x{1F928}-\\x{1F92F}]', // E5.0   [8] (🤨..🤯)
        '\\x{1F930}', // E3.0   [1] (🤰)
        '[\\x{1F931}-\\x{1F932}]', // E5.0   [2] (🤱..🤲)
        '[\\x{1F933}-\\x{1F93A}]', // E3.0   [8] (🤳..🤺)
        '[\\x{1F93C}-\\x{1F93E}]', // E3.0   [3] (🤼..🤾)
        '\\x{1F93F}', // E12.0  [1] (🤿)
        '[\\x{1F940}-\\x{1F945}]', // E3.0   [6] (🥀..🥅)
        '[\\x{1F947}-\\x{1F94B}]', // E3.0   [5] (🥇..🥋)
        '\\x{1F94C}', // E5.0   [1] (🥌)
        '[\\x{1F94D}-\\x{1F94F}]', // E11.0  [3] (🥍..🥏)
        '[\\x{1F950}-\\x{1F95E}]', // E3.0  [15] (🥐..🥞)
        '[\\x{1F95F}-\\x{1F96B}]', // E5.0  [13] (🥟..🥫)
        '[\\x{1F96C}-\\x{1F970}]', // E11.0  [5] (🥬..🥰)
        '\\x{1F971}', // E12.0  [1] (🥱)
        '\\x{1F972}', // E13.0  [1] (🥲)
        '[\\x{1F973}-\\x{1F976}]', // E11.0  [4] (🥳..🥶)
        '[\\x{1F977}-\\x{1F978}]', // E13.0  [2] (🥷..🥸)
        '\\x{1F97A}', // E11.0  [1] (🥺)
        '\\x{1F97B}', // E12.0  [1] (🥻)
        '[\\x{1F97C}-\\x{1F97F}]', // E11.0  [4] (🥼..🥿)
        '[\\x{1F980}-\\x{1F984}]', // E1.0   [5] (🦀..🦄)
        '[\\x{1F985}-\\x{1F991}]', // E3.0  [13] (🦅..🦑)
        '[\\x{1F992}-\\x{1F997}]', // E5.0   [6] (🦒..🦗)
        '[\\x{1F998}-\\x{1F9A2}]', // E11.0 [11] (🦘..🦢)
        '[\\x{1F9A3}-\\x{1F9A4}]', // E13.0  [2] (🦣..🦤)
        '[\\x{1F9A5}-\\x{1F9AA}]', // E12.0  [6] (🦥..🦪)
        '[\\x{1F9AB}-\\x{1F9AD}]', // E13.0  [3] (🦫..🦭)
        '[\\x{1F9AE}-\\x{1F9AF}]', // E12.0  [2] (🦮..🦯)
        '[\\x{1F9B0}-\\x{1F9B9}]', // E11.0 [10] (🦰..🦹)
        '[\\x{1F9BA}-\\x{1F9BF}]', // E12.0  [6] (🦺..🦿)
        '\\x{1F9C0}', // E1.0   [1] (🧀)
        '[\\x{1F9C1}-\\x{1F9C2}]', // E11.0  [2] (🧁..🧂)
        '[\\x{1F9C3}-\\x{1F9CA}]', // E12.0  [8] (🧃..🧊)
        '\\x{1F9CB}', // E13.0  [1] (🧋)
        '[\\x{1F9CD}-\\x{1F9CF}]', // E12.0  [3] (🧍..🧏)
        '[\\x{1F9D0}-\\x{1F9E6}]', // E5.0  [23] (🧐..🧦)
        '[\\x{1F9E7}-\\x{1F9FF}]', // E11.0 [25] (🧧..🧿)
        '[\\x{1FA70}-\\x{1FA73}]', // E12.0  [4] (🩰..🩳)
        '\\x{1FA74}', // E13.0  [1] (🩴)
        '[\\x{1FA78}-\\x{1FA7A}]', // E12.0  [3] (🩸..🩺)
        '[\\x{1FA80}-\\x{1FA82}]', // E12.0  [3] (🪀..🪂)
        '[\\x{1FA83}-\\x{1FA86}]', // E13.0  [4] (🪃..🪆)
        '[\\x{1FA90}-\\x{1FA95}]', // E12.0  [6] (🪐..🪕)
        '[\\x{1FA96}-\\x{1FAA8}]', // E13.0 [19] (🪖..🪨)
        '[\\x{1FAB0}-\\x{1FAB6}]', // E13.0  [7] (🪰..🪶)
        '[\\x{1FAC0}-\\x{1FAC2}]', // E13.0  [3] (🫀..🫂)
        '[\\x{1FAD0}-\\x{1FAD6}]', // E13.0  [7] (🫐..🫖)
        '[\\x{231A}-\\x{231B}]', // E0.6   [2] (⌚..⌛)
        '[\\x{23E9}-\\x{23EC}]', // E0.6   [4] (⏩..⏬)
        '\\x{23F0}', // E0.6   [1] (⏰)
        '\\x{23F3}', // E0.6   [1] (⏳)
        '[\\x{25FD}-\\x{25FE}]', // E0.6   [2] (◽..◾)
        '[\\x{2614}-\\x{2615}]', // E0.6   [2] (☔..☕)
        '[\\x{2648}-\\x{2653}]', // E0.6  [12] (♈..♓)
        '\\x{267F}', // E0.6   [1] (♿)
        '\\x{2693}', // E0.6   [1] (⚓)
        '\\x{26A1}', // E0.6   [1] (⚡)
        '[\\x{26AA}-\\x{26AB}]', // E0.6   [2] (⚪..⚫)
        '[\\x{26BD}-\\x{26BE}]', // E0.6   [2] (⚽..⚾)
        '[\\x{26C4}-\\x{26C5}]', // E0.6   [2] (⛄..⛅)
        '\\x{26CE}', // E0.6   [1] (⛎)
        '\\x{26D4}', // E0.6   [1] (⛔)
        '\\x{26EA}', // E0.6   [1] (⛪)
        '[\\x{26F2}-\\x{26F3}]', // E0.6   [2] (⛲..⛳)
        '\\x{26F5}', // E0.6   [1] (⛵)
        '\\x{26FA}', // E0.6   [1] (⛺)
        '\\x{26FD}', // E0.6   [1] (⛽)
        '\\x{2705}', // E0.6   [1] (✅)
        '[\\x{270A}-\\x{270B}]', // E0.6   [2] (✊..✋)
        '\\x{2728}', // E0.6   [1] (✨)
        '\\x{274C}', // E0.6   [1] (❌)
        '\\x{274E}', // E0.6   [1] (❎)
        '[\\x{2753}-\\x{2755}]', // E0.6   [3] (❓..❕)
        '\\x{2757}', // E0.6   [1] (❗)
        '[\\x{2795}-\\x{2797}]', // E0.6   [3] (➕..➗)
        '\\x{27B0}', // E0.6   [1] (➰)
        '\\x{27BF}', // E1.0   [1] (➿)
        '[\\x{2B1B}-\\x{2B1C}]', // E0.6   [2] (⬛..⬜)
        '\\x{2B50}', // E0.6   [1] (⭐)
        '\\x{2B55}', // E0.6   [1] (⭕)
    ];

    /**
     * Patterns that match Zero-Width-Joiner (ZWJ) sequences used for "family" characters like "👨‍👩‍👧‍👧".
     */
    private const ZWJ_SEQUENCE_PATTERNS = [
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👨🏻‍❤️‍💋‍👨🏻)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1  [1] (👨🏻‍❤️‍💋‍👨🏼)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👨🏻‍❤️‍💋‍👨🏽)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1  [1] (👨🏻‍❤️‍💋‍👨🏾)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👨🏻‍❤️‍💋‍👨🏿)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👨🏼‍❤️‍💋‍👨🏻)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1  [1] (👨🏼‍❤️‍💋‍👨🏼)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1 [1] (👨🏼‍❤️‍💋‍👨🏽)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👨🏼‍❤️‍💋‍👨🏾)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👨🏼‍❤️‍💋‍👨🏿)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👨🏽‍❤️‍💋‍👨🏻)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1 [1] (👨🏽‍❤️‍💋‍👨🏼)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👨🏽‍❤️‍💋‍👨🏽)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1  [1] (👨🏽‍❤️‍💋‍👨🏾)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👨🏽‍❤️‍💋‍👨🏿)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👨🏾‍❤️‍💋‍👨🏻)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👨🏾‍❤️‍💋‍👨🏼)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👨🏾‍❤️‍💋‍👨🏽)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1  [1] (👨🏾‍❤️‍💋‍👨🏾)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👨🏾‍❤️‍💋‍👨🏿)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👨🏿‍❤️‍💋‍👨🏻)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1  [1] (👨🏿‍❤️‍💋‍👨🏼)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👨🏿‍❤️‍💋‍👨🏽)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1  [1] (👨🏿‍❤️‍💋‍👨🏾)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👨🏿‍❤️‍💋‍👨🏿)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👩🏻‍❤️‍💋‍👨🏻)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👩🏻‍❤️‍💋‍👨🏼)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👩🏻‍❤️‍💋‍👨🏽)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1 [1] (👩🏻‍❤️‍💋‍👨🏾)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👩🏻‍❤️‍💋‍👨🏿)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1  [1] (👩🏻‍❤️‍💋‍👩🏻)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1[1] (👩🏻‍❤️‍💋‍👩🏼)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1  [1] (👩🏻‍❤️‍💋‍👩🏽)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1[1] (👩🏻‍❤️‍💋‍👩🏾)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1  [1] (👩🏻‍❤️‍💋‍👩🏿)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1[1] (👩🏼‍❤️‍💋‍👨🏻)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1  [1] (👩🏼‍❤️‍💋‍👨🏼)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1[1] (👩🏼‍❤️‍💋‍👨🏽)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👩🏼‍❤️‍💋‍👨🏾)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1 [1] (👩🏼‍❤️‍💋‍👨🏿)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1[1] (👩🏼‍❤️‍💋‍👩🏻)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1  [1] (👩🏼‍❤️‍💋‍👩🏼)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1[1] (👩🏼‍❤️‍💋‍👩🏽)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1[1] (👩🏼‍❤️‍💋‍👩🏾)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1[1] (👩🏼‍❤️‍💋‍👩🏿)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👩🏽‍❤️‍💋‍👨🏻)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👩🏽‍❤️‍💋‍👨🏼)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👩🏽‍❤️‍💋‍👨🏽)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👩🏽‍❤️‍💋‍👨🏾)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👩🏽‍❤️‍💋‍👨🏿)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1  [1] (👩🏽‍❤️‍💋‍👩🏻)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1[1] (👩🏽‍❤️‍💋‍👩🏼)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1  [1] (👩🏽‍❤️‍💋‍👩🏽)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1[1] (👩🏽‍❤️‍💋‍👩🏾)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1  [1] (👩🏽‍❤️‍💋‍👩🏿)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1 [1] (👩🏾‍❤️‍💋‍👨🏻)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👩🏾‍❤️‍💋‍👨🏼)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1[1] (👩🏾‍❤️‍💋‍👨🏽)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1  [1] (👩🏾‍❤️‍💋‍👨🏾)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👩🏾‍❤️‍💋‍👨🏿)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1[1] (👩🏾‍❤️‍💋‍👩🏻)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1[1] (👩🏾‍❤️‍💋‍👩🏼)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1[1] (👩🏾‍❤️‍💋‍👩🏽)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1  [1] (👩🏾‍❤️‍💋‍👩🏾)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1[1] (👩🏾‍❤️‍💋‍👩🏿)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👩🏿‍❤️‍💋‍👨🏻)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1 [1] (👩🏿‍❤️‍💋‍👨🏼)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👩🏿‍❤️‍💋‍👨🏽)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1  [1] (👩🏿‍❤️‍💋‍👨🏾)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👩🏿‍❤️‍💋‍👨🏿)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1  [1] (👩🏿‍❤️‍💋‍👩🏻)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1[1] (👩🏿‍❤️‍💋‍👩🏼)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1  [1] (👩🏿‍❤️‍💋‍👩🏽)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1[1] (👩🏿‍❤️‍💋‍👩🏾)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1  [1] (👩🏿‍❤️‍💋‍👩🏿)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E13.1[1] (🧑🏻‍❤️‍💋‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E13.1  [1] (🧑🏻‍❤️‍💋‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E13.1[1] (🧑🏻‍❤️‍💋‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E13.1  [1] (🧑🏻‍❤️‍💋‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E13.1[1] (🧑🏼‍❤️‍💋‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E13.1[1] (🧑🏼‍❤️‍💋‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E13.1[1] (🧑🏼‍❤️‍💋‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E13.1[1] (🧑🏼‍❤️‍💋‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E13.1  [1] (🧑🏽‍❤️‍💋‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E13.1[1] (🧑🏽‍❤️‍💋‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E13.1[1] (🧑🏽‍❤️‍💋‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E13.1  [1] (🧑🏽‍❤️‍💋‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E13.1[1] (🧑🏾‍❤️‍💋‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E13.1[1] (🧑🏾‍❤️‍💋‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E13.1[1] (🧑🏾‍❤️‍💋‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E13.1[1] (🧑🏾‍❤️‍💋‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E13.1  [1] (🧑🏿‍❤️‍💋‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E13.1[1] (🧑🏿‍❤️‍💋‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E13.1  [1] (🧑🏿‍❤️‍💋‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E13.1[1] (🧑🏿‍❤️‍💋‍🧑🏾)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👨🏻‍❤️‍👨🏻)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👨🏻‍❤️‍👨🏼)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👨🏻‍❤️‍👨🏽)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👨🏻‍❤️‍👨🏾)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👨🏻‍❤️‍👨🏿)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1[1] (👨🏼‍❤️‍👨🏻)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1  [1] (👨🏼‍❤️‍👨🏼)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1[1] (👨🏼‍❤️‍👨🏽)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👨🏼‍❤️‍👨🏾)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1[1] (👨🏼‍❤️‍👨🏿)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👨🏽‍❤️‍👨🏻)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👨🏽‍❤️‍👨🏼)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👨🏽‍❤️‍👨🏽)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👨🏽‍❤️‍👨🏾)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👨🏽‍❤️‍👨🏿)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1[1] (👨🏾‍❤️‍👨🏻)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👨🏾‍❤️‍👨🏼)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1[1] (👨🏾‍❤️‍👨🏽)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1  [1] (👨🏾‍❤️‍👨🏾)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1[1] (👨🏾‍❤️‍👨🏿)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👨🏿‍❤️‍👨🏻)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👨🏿‍❤️‍👨🏼)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👨🏿‍❤️‍👨🏽)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👨🏿‍❤️‍👨🏾)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👨🏿‍❤️‍👨🏿)
        '\\x{1F468}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}', // E2.0   [1] (👨‍❤️‍💋‍👨)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👩🏻‍❤️‍👨🏻)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👩🏻‍❤️‍👨🏼)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1 [1] (👩🏻‍❤️‍👨🏽)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👩🏻‍❤️‍👨🏾)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👩🏻‍❤️‍👨🏿)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1  [1] (👩🏻‍❤️‍👩🏻)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1[1] (👩🏻‍❤️‍👩🏼)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1[1] (👩🏻‍❤️‍👩🏽)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1[1] (👩🏻‍❤️‍👩🏾)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1 [1] (👩🏻‍❤️‍👩🏿)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1[1] (👩🏼‍❤️‍👨🏻)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1  [1] (👩🏼‍❤️‍👨🏼)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1[1] (👩🏼‍❤️‍👨🏽)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👩🏼‍❤️‍👨🏾)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1[1] (👩🏼‍❤️‍👨🏿)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1[1] (👩🏼‍❤️‍👩🏻)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1  [1] (👩🏼‍❤️‍👩🏼)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1[1] (👩🏼‍❤️‍👩🏽)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1[1] (👩🏼‍❤️‍👩🏾)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1[1] (👩🏼‍❤️‍👩🏿)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1 [1] (👩🏽‍❤️‍👨🏻)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👩🏽‍❤️‍👨🏼)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👩🏽‍❤️‍👨🏽)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👩🏽‍❤️‍👨🏾)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👩🏽‍❤️‍👨🏿)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1[1] (👩🏽‍❤️‍👩🏻)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1[1] (👩🏽‍❤️‍👩🏼)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1  [1] (👩🏽‍❤️‍👩🏽)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1[1] (👩🏽‍❤️‍👩🏾)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1[1] (👩🏽‍❤️‍👩🏿)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1[1] (👩🏾‍❤️‍👨🏻)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👩🏾‍❤️‍👨🏼)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1[1] (👩🏾‍❤️‍👨🏽)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1  [1] (👩🏾‍❤️‍👨🏾)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1[1] (👩🏾‍❤️‍👨🏿)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1[1] (👩🏾‍❤️‍👩🏻)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1[1] (👩🏾‍❤️‍👩🏼)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1[1] (👩🏾‍❤️‍👩🏽)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1  [1] (👩🏾‍❤️‍👩🏾)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1[1] (👩🏾‍❤️‍👩🏿)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FB}', // E13.1  [1] (👩🏿‍❤️‍👨🏻)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FC}', // E13.1[1] (👩🏿‍❤️‍👨🏼)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FD}', // E13.1  [1] (👩🏿‍❤️‍👨🏽)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FE}', // E13.1[1] (👩🏿‍❤️‍👨🏾)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}\\x{1F3FF}', // E13.1  [1] (👩🏿‍❤️‍👨🏿)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FB}', // E13.1 [1] (👩🏿‍❤️‍👩🏻)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FC}', // E13.1[1] (👩🏿‍❤️‍👩🏼)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FD}', // E13.1[1] (👩🏿‍❤️‍👩🏽)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FE}', // E13.1[1] (👩🏿‍❤️‍👩🏾)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}\\x{1F3FF}', // E13.1  [1] (👩🏿‍❤️‍👩🏿)
        '\\x{1F469}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F468}', // E2.0   [1] (👩‍❤️‍💋‍👨)
        '\\x{1F469}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F48B}\\x{200D}\\x{1F469}', // E2.0   [1] (👩‍❤️‍💋‍👩)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E13.1[1] (🧑🏻‍❤️‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E13.1[1] (🧑🏻‍❤️‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E13.1[1] (🧑🏻‍❤️‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E13.1[1] (🧑🏻‍❤️‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E13.1[1] (🧑🏼‍❤️‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E13.1[1] (🧑🏼‍❤️‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E13.1[1] (🧑🏼‍❤️‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E13.1[1] (🧑🏼‍❤️‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E13.1[1] (🧑🏽‍❤️‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E13.1[1] (🧑🏽‍❤️‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E13.1[1] (🧑🏽‍❤️‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E13.1[1] (🧑🏽‍❤️‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E13.1[1] (🧑🏾‍❤️‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E13.1[1] (🧑🏾‍❤️‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E13.1[1] (🧑🏾‍❤️‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E13.1[1] (🧑🏾‍❤️‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E13.1[1] (🧑🏿‍❤️‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E13.1[1] (🧑🏿‍❤️‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E13.1[1] (🧑🏿‍❤️‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E13.1[1] (🧑🏿‍❤️‍🧑🏾)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FC}', // E12.1  [1] (👨🏻‍🤝‍👨🏼)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FD}', // E12.1  [1] (👨🏻‍🤝‍👨🏽)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FE}', // E12.1  [1] (👨🏻‍🤝‍👨🏾)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FF}', // E12.1  [1] (👨🏻‍🤝‍👨🏿)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FB}', // E12.0  [1] (👨🏼‍🤝‍👨🏻)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FD}', // E12.1  [1] (👨🏼‍🤝‍👨🏽)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FE}', // E12.1 [1] (👨🏼‍🤝‍👨🏾)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FF}', // E12.1  [1] (👨🏼‍🤝‍👨🏿)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FB}', // E12.0  [1] (👨🏽‍🤝‍👨🏻)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FC}', // E12.0  [1] (👨🏽‍🤝‍👨🏼)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FE}', // E12.1  [1] (👨🏽‍🤝‍👨🏾)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FF}', // E12.1  [1] (👨🏽‍🤝‍👨🏿)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FB}', // E12.0  [1] (👨🏾‍🤝‍👨🏻)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FC}', // E12.0 [1] (👨🏾‍🤝‍👨🏼)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FD}', // E12.0  [1] (👨🏾‍🤝‍👨🏽)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FF}', // E12.1  [1] (👨🏾‍🤝‍👨🏿)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FB}', // E12.0  [1] (👨🏿‍🤝‍👨🏻)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FC}', // E12.0  [1] (👨🏿‍🤝‍👨🏼)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FD}', // E12.0  [1] (👨🏿‍🤝‍👨🏽)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FE}', // E12.0  [1] (👨🏿‍🤝‍👨🏾)
        '\\x{1F468}\\x{200D}\\x{1F468}\\x{200D}\\x{1F466}\\x{200D}\\x{1F466}', // E2.0   [1] (👨‍👨‍👦‍👦)
        '\\x{1F468}\\x{200D}\\x{1F468}\\x{200D}\\x{1F467}\\x{200D}\\x{1F466}', // E2.0   [1] (👨‍👨‍👧‍👦)
        '\\x{1F468}\\x{200D}\\x{1F468}\\x{200D}\\x{1F467}\\x{200D}\\x{1F467}', // E2.0   [1] (👨‍👨‍👧‍👧)
        '\\x{1F468}\\x{200D}\\x{1F469}\\x{200D}\\x{1F466}\\x{200D}\\x{1F466}', // E2.0   [1] (👨‍👩‍👦‍👦)
        '\\x{1F468}\\x{200D}\\x{1F469}\\x{200D}\\x{1F467}\\x{200D}\\x{1F466}', // E2.0   [1] (👨‍👩‍👧‍👦)
        '\\x{1F468}\\x{200D}\\x{1F469}\\x{200D}\\x{1F467}\\x{200D}\\x{1F467}', // E2.0   [1] (👨‍👩‍👧‍👧)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FC}', // E12.0[1] (👩🏻‍🤝‍👨🏼)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FD}', // E12.0  [1] (👩🏻‍🤝‍👨🏽)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FE}', // E12.0[1] (👩🏻‍🤝‍👨🏾)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FF}', // E12.0  [1] (👩🏻‍🤝‍👨🏿)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FC}', // E12.1  [1] (👩🏻‍🤝‍👩🏼)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FD}', // E12.1  [1] (👩🏻‍🤝‍👩🏽)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FE}', // E12.1  [1] (👩🏻‍🤝‍👩🏾)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FF}', // E12.1  [1] (👩🏻‍🤝‍👩🏿)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FB}', // E12.0[1] (👩🏼‍🤝‍👨🏻)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FD}', // E12.0[1] (👩🏼‍🤝‍👨🏽)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FE}', // E12.0[1] (👩🏼‍🤝‍👨🏾)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FF}', // E12.0[1] (👩🏼‍🤝‍👨🏿)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FB}', // E12.0  [1] (👩🏼‍🤝‍👩🏻)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FD}', // E12.1  [1] (👩🏼‍🤝‍👩🏽)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FE}', // E12.1[1] (👩🏼‍🤝‍👩🏾)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FF}', // E12.1  [1] (👩🏼‍🤝‍👩🏿)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FB}', // E12.0  [1] (👩🏽‍🤝‍👨🏻)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FC}', // E12.0[1] (👩🏽‍🤝‍👨🏼)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FE}', // E12.0[1] (👩🏽‍🤝‍👨🏾)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FF}', // E12.0  [1] (👩🏽‍🤝‍👨🏿)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FB}', // E12.0  [1] (👩🏽‍🤝‍👩🏻)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FC}', // E12.0  [1] (👩🏽‍🤝‍👩🏼)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FE}', // E12.1  [1] (👩🏽‍🤝‍👩🏾)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FF}', // E12.1  [1] (👩🏽‍🤝‍👩🏿)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FB}', // E12.0[1] (👩🏾‍🤝‍👨🏻)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FC}', // E12.0[1] (👩🏾‍🤝‍👨🏼)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FD}', // E12.0[1] (👩🏾‍🤝‍👨🏽)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FF}', // E12.0[1] (👩🏾‍🤝‍👨🏿)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FB}', // E12.0  [1] (👩🏾‍🤝‍👩🏻)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FC}', // E12.0[1] (👩🏾‍🤝‍👩🏼)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FD}', // E12.0  [1] (👩🏾‍🤝‍👩🏽)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FF}', // E12.1  [1] (👩🏾‍🤝‍👩🏿)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FB}', // E12.0  [1] (👩🏿‍🤝‍👨🏻)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FC}', // E12.0[1] (👩🏿‍🤝‍👨🏼)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FD}', // E12.0  [1] (👩🏿‍🤝‍👨🏽)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F468}\\x{1F3FE}', // E12.0[1] (👩🏿‍🤝‍👨🏾)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FB}', // E12.0  [1] (👩🏿‍🤝‍👩🏻)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FC}', // E12.0  [1] (👩🏿‍🤝‍👩🏼)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FD}', // E12.0  [1] (👩🏿‍🤝‍👩🏽)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F469}\\x{1F3FE}', // E12.0  [1] (👩🏿‍🤝‍👩🏾)
        '\\x{1F469}\\x{200D}\\x{1F469}\\x{200D}\\x{1F466}\\x{200D}\\x{1F466}', // E2.0   [1] (👩‍👩‍👦‍👦)
        '\\x{1F469}\\x{200D}\\x{1F469}\\x{200D}\\x{1F467}\\x{200D}\\x{1F466}', // E2.0   [1] (👩‍👩‍👧‍👦)
        '\\x{1F469}\\x{200D}\\x{1F469}\\x{200D}\\x{1F467}\\x{200D}\\x{1F467}', // E2.0   [1] (👩‍👩‍👧‍👧)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E12.0  [1] (🧑🏻‍🤝‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E12.1  [1] (🧑🏻‍🤝‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E12.1  [1] (🧑🏻‍🤝‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E12.1  [1] (🧑🏻‍🤝‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E12.1  [1] (🧑🏻‍🤝‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E12.0  [1] (🧑🏼‍🤝‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E12.0  [1] (🧑🏼‍🤝‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E12.1  [1] (🧑🏼‍🤝‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E12.1[1] (🧑🏼‍🤝‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E12.1  [1] (🧑🏼‍🤝‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E12.0  [1] (🧑🏽‍🤝‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E12.0  [1] (🧑🏽‍🤝‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E12.0  [1] (🧑🏽‍🤝‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E12.1  [1] (🧑🏽‍🤝‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E12.1  [1] (🧑🏽‍🤝‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E12.0  [1] (🧑🏾‍🤝‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E12.0[1] (🧑🏾‍🤝‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E12.0  [1] (🧑🏾‍🤝‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E12.0  [1] (🧑🏾‍🤝‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E12.1  [1] (🧑🏾‍🤝‍🧑🏿)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FB}', // E12.0  [1] (🧑🏿‍🤝‍🧑🏻)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FC}', // E12.0  [1] (🧑🏿‍🤝‍🧑🏼)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FD}', // E12.0  [1] (🧑🏿‍🤝‍🧑🏽)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FE}', // E12.0  [1] (🧑🏿‍🤝‍🧑🏾)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}\\x{1F3FF}', // E12.0  [1] (🧑🏿‍🤝‍🧑🏿)
        '\\x{1F468}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}', // E2.0   [1] (👨‍❤️‍👨)
        '\\x{1F469}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F468}', // E2.0   [1] (👩‍❤️‍👨)
        '\\x{1F469}\\x{200D}\\x{2764}\\x{FE0F}\\x{200D}\\x{1F469}', // E2.0   [1] (👩‍❤️‍👩)
        '\\x{1F3C3}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏃🏻‍♀️)
        '\\x{1F3C3}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏃🏻‍♂️)
        '\\x{1F3C3}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏃🏼‍♀️)
        '\\x{1F3C3}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏃🏼‍♂️)
        '\\x{1F3C3}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏃🏽‍♀️)
        '\\x{1F3C3}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏃🏽‍♂️)
        '\\x{1F3C3}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏃🏾‍♀️)
        '\\x{1F3C3}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏃🏾‍♂️)
        '\\x{1F3C3}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏃🏿‍♀️)
        '\\x{1F3C3}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏃🏿‍♂️)
        '\\x{1F3C4}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏄🏻‍♀️)
        '\\x{1F3C4}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏄🏻‍♂️)
        '\\x{1F3C4}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏄🏼‍♀️)
        '\\x{1F3C4}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏄🏼‍♂️)
        '\\x{1F3C4}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏄🏽‍♀️)
        '\\x{1F3C4}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏄🏽‍♂️)
        '\\x{1F3C4}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏄🏾‍♀️)
        '\\x{1F3C4}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏄🏾‍♂️)
        '\\x{1F3C4}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏄🏿‍♀️)
        '\\x{1F3C4}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏄🏿‍♂️)
        '\\x{1F3CA}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏊🏻‍♀️)
        '\\x{1F3CA}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏊🏻‍♂️)
        '\\x{1F3CA}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏊🏼‍♀️)
        '\\x{1F3CA}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏊🏼‍♂️)
        '\\x{1F3CA}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏊🏽‍♀️)
        '\\x{1F3CA}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏊🏽‍♂️)
        '\\x{1F3CA}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏊🏾‍♀️)
        '\\x{1F3CA}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏊🏾‍♂️)
        '\\x{1F3CA}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏊🏿‍♀️)
        '\\x{1F3CA}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏊🏿‍♂️)
        '\\x{1F3CB}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏋🏻‍♀️)
        '\\x{1F3CB}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏋🏻‍♂️)
        '\\x{1F3CB}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏋🏼‍♀️)
        '\\x{1F3CB}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏋🏼‍♂️)
        '\\x{1F3CB}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏋🏽‍♀️)
        '\\x{1F3CB}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏋🏽‍♂️)
        '\\x{1F3CB}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏋🏾‍♀️)
        '\\x{1F3CB}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏋🏾‍♂️)
        '\\x{1F3CB}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏋🏿‍♀️)
        '\\x{1F3CB}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏋🏿‍♂️)
        '\\x{1F3CB}\\x{FE0F}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏋️‍♀️)
        '\\x{1F3CB}\\x{FE0F}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏋️‍♂️)
        '\\x{1F3CC}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏌🏻‍♀️)
        '\\x{1F3CC}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏌🏻‍♂️)
        '\\x{1F3CC}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏌🏼‍♀️)
        '\\x{1F3CC}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏌🏼‍♂️)
        '\\x{1F3CC}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏌🏽‍♀️)
        '\\x{1F3CC}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏌🏽‍♂️)
        '\\x{1F3CC}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏌🏾‍♀️)
        '\\x{1F3CC}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏌🏾‍♂️)
        '\\x{1F3CC}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏌🏿‍♀️)
        '\\x{1F3CC}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏌🏿‍♂️)
        '\\x{1F3CC}\\x{FE0F}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏌️‍♀️)
        '\\x{1F3CC}\\x{FE0F}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏌️‍♂️)
        '\\x{1F3F3}\\x{FE0F}\\x{200D}\\x{26A7}\\x{FE0F}', // E13.0  [1] (🏳️‍⚧️)
        '\\x{1F441}\\x{FE0F}\\x{200D}\\x{1F5E8}\\x{FE0F}', // E2.0   [1] (👁️‍🗨️)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👨🏻‍⚕️)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👨🏻‍⚖️)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👨🏻‍✈️)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👨🏼‍⚕️)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👨🏼‍⚖️)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👨🏼‍✈️)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👨🏽‍⚕️)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👨🏽‍⚖️)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👨🏽‍✈️)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👨🏾‍⚕️)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👨🏾‍⚖️)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👨🏾‍✈️)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👨🏿‍⚕️)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👨🏿‍⚖️)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👨🏿‍✈️)
        '\\x{1F468}\\x{200D}\\x{1F466}\\x{200D}\\x{1F466}', // E4.0   [1] (👨‍👦‍👦)
        '\\x{1F468}\\x{200D}\\x{1F467}\\x{200D}\\x{1F466}', // E4.0   [1] (👨‍👧‍👦)
        '\\x{1F468}\\x{200D}\\x{1F467}\\x{200D}\\x{1F467}', // E4.0   [1] (👨‍👧‍👧)
        '\\x{1F468}\\x{200D}\\x{1F468}\\x{200D}\\x{1F466}', // E2.0   [1] (👨‍👨‍👦)
        '\\x{1F468}\\x{200D}\\x{1F468}\\x{200D}\\x{1F467}', // E2.0   [1] (👨‍👨‍👧)
        '\\x{1F468}\\x{200D}\\x{1F469}\\x{200D}\\x{1F466}', // E2.0   [1] (👨‍👩‍👦)
        '\\x{1F468}\\x{200D}\\x{1F469}\\x{200D}\\x{1F467}', // E2.0   [1] (👨‍👩‍👧)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👩🏻‍⚕️)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👩🏻‍⚖️)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👩🏻‍✈️)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👩🏼‍⚕️)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👩🏼‍⚖️)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👩🏼‍✈️)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👩🏽‍⚕️)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👩🏽‍⚖️)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👩🏽‍✈️)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👩🏾‍⚕️)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👩🏾‍⚖️)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👩🏾‍✈️)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👩🏿‍⚕️)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👩🏿‍⚖️)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👩🏿‍✈️)
        '\\x{1F469}\\x{200D}\\x{1F466}\\x{200D}\\x{1F466}', // E4.0   [1] (👩‍👦‍👦)
        '\\x{1F469}\\x{200D}\\x{1F467}\\x{200D}\\x{1F466}', // E4.0   [1] (👩‍👧‍👦)
        '\\x{1F469}\\x{200D}\\x{1F467}\\x{200D}\\x{1F467}', // E4.0   [1] (👩‍👧‍👧)
        '\\x{1F469}\\x{200D}\\x{1F469}\\x{200D}\\x{1F466}', // E2.0   [1] (👩‍👩‍👦)
        '\\x{1F469}\\x{200D}\\x{1F469}\\x{200D}\\x{1F467}', // E2.0   [1] (👩‍👩‍👧)
        '\\x{1F46E}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👮🏻‍♀️)
        '\\x{1F46E}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👮🏻‍♂️)
        '\\x{1F46E}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👮🏼‍♀️)
        '\\x{1F46E}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👮🏼‍♂️)
        '\\x{1F46E}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👮🏽‍♀️)
        '\\x{1F46E}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👮🏽‍♂️)
        '\\x{1F46E}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👮🏾‍♀️)
        '\\x{1F46E}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👮🏾‍♂️)
        '\\x{1F46E}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👮🏿‍♀️)
        '\\x{1F46E}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👮🏿‍♂️)
        '\\x{1F470}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (👰🏻‍♀️)
        '\\x{1F470}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (👰🏻‍♂️)
        '\\x{1F470}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (👰🏼‍♀️)
        '\\x{1F470}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (👰🏼‍♂️)
        '\\x{1F470}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (👰🏽‍♀️)
        '\\x{1F470}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (👰🏽‍♂️)
        '\\x{1F470}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (👰🏾‍♀️)
        '\\x{1F470}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (👰🏾‍♂️)
        '\\x{1F470}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (👰🏿‍♀️)
        '\\x{1F470}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (👰🏿‍♂️)
        '\\x{1F471}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👱🏻‍♀️)
        '\\x{1F471}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👱🏻‍♂️)
        '\\x{1F471}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👱🏼‍♀️)
        '\\x{1F471}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👱🏼‍♂️)
        '\\x{1F471}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👱🏽‍♀️)
        '\\x{1F471}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👱🏽‍♂️)
        '\\x{1F471}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👱🏾‍♀️)
        '\\x{1F471}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👱🏾‍♂️)
        '\\x{1F471}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👱🏿‍♀️)
        '\\x{1F471}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👱🏿‍♂️)
        '\\x{1F473}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👳🏻‍♀️)
        '\\x{1F473}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👳🏻‍♂️)
        '\\x{1F473}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👳🏼‍♀️)
        '\\x{1F473}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👳🏼‍♂️)
        '\\x{1F473}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👳🏽‍♀️)
        '\\x{1F473}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👳🏽‍♂️)
        '\\x{1F473}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👳🏾‍♀️)
        '\\x{1F473}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👳🏾‍♂️)
        '\\x{1F473}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👳🏿‍♀️)
        '\\x{1F473}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👳🏿‍♂️)
        '\\x{1F477}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👷🏻‍♀️)
        '\\x{1F477}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👷🏻‍♂️)
        '\\x{1F477}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👷🏼‍♀️)
        '\\x{1F477}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👷🏼‍♂️)
        '\\x{1F477}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👷🏽‍♀️)
        '\\x{1F477}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👷🏽‍♂️)
        '\\x{1F477}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👷🏾‍♀️)
        '\\x{1F477}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👷🏾‍♂️)
        '\\x{1F477}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👷🏿‍♀️)
        '\\x{1F477}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👷🏿‍♂️)
        '\\x{1F481}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💁🏻‍♀️)
        '\\x{1F481}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💁🏻‍♂️)
        '\\x{1F481}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💁🏼‍♀️)
        '\\x{1F481}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💁🏼‍♂️)
        '\\x{1F481}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💁🏽‍♀️)
        '\\x{1F481}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💁🏽‍♂️)
        '\\x{1F481}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💁🏾‍♀️)
        '\\x{1F481}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💁🏾‍♂️)
        '\\x{1F481}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💁🏿‍♀️)
        '\\x{1F481}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💁🏿‍♂️)
        '\\x{1F482}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💂🏻‍♀️)
        '\\x{1F482}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💂🏻‍♂️)
        '\\x{1F482}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💂🏼‍♀️)
        '\\x{1F482}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💂🏼‍♂️)
        '\\x{1F482}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💂🏽‍♀️)
        '\\x{1F482}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💂🏽‍♂️)
        '\\x{1F482}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💂🏾‍♀️)
        '\\x{1F482}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💂🏾‍♂️)
        '\\x{1F482}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💂🏿‍♀️)
        '\\x{1F482}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💂🏿‍♂️)
        '\\x{1F486}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💆🏻‍♀️)
        '\\x{1F486}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💆🏻‍♂️)
        '\\x{1F486}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💆🏼‍♀️)
        '\\x{1F486}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💆🏼‍♂️)
        '\\x{1F486}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💆🏽‍♀️)
        '\\x{1F486}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💆🏽‍♂️)
        '\\x{1F486}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💆🏾‍♀️)
        '\\x{1F486}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💆🏾‍♂️)
        '\\x{1F486}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💆🏿‍♀️)
        '\\x{1F486}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💆🏿‍♂️)
        '\\x{1F487}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💇🏻‍♀️)
        '\\x{1F487}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💇🏻‍♂️)
        '\\x{1F487}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💇🏼‍♀️)
        '\\x{1F487}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💇🏼‍♂️)
        '\\x{1F487}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💇🏽‍♀️)
        '\\x{1F487}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💇🏽‍♂️)
        '\\x{1F487}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💇🏾‍♀️)
        '\\x{1F487}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💇🏾‍♂️)
        '\\x{1F487}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💇🏿‍♀️)
        '\\x{1F487}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💇🏿‍♂️)
        '\\x{1F575}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🕵🏻‍♀️)
        '\\x{1F575}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🕵🏻‍♂️)
        '\\x{1F575}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🕵🏼‍♀️)
        '\\x{1F575}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🕵🏼‍♂️)
        '\\x{1F575}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🕵🏽‍♀️)
        '\\x{1F575}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🕵🏽‍♂️)
        '\\x{1F575}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🕵🏾‍♀️)
        '\\x{1F575}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🕵🏾‍♂️)
        '\\x{1F575}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🕵🏿‍♀️)
        '\\x{1F575}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🕵🏿‍♂️)
        '\\x{1F575}\\x{FE0F}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🕵️‍♀️)
        '\\x{1F575}\\x{FE0F}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🕵️‍♂️)
        '\\x{1F645}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙅🏻‍♀️)
        '\\x{1F645}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙅🏻‍♂️)
        '\\x{1F645}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙅🏼‍♀️)
        '\\x{1F645}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙅🏼‍♂️)
        '\\x{1F645}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙅🏽‍♀️)
        '\\x{1F645}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙅🏽‍♂️)
        '\\x{1F645}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙅🏾‍♀️)
        '\\x{1F645}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙅🏾‍♂️)
        '\\x{1F645}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙅🏿‍♀️)
        '\\x{1F645}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙅🏿‍♂️)
        '\\x{1F646}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙆🏻‍♀️)
        '\\x{1F646}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙆🏻‍♂️)
        '\\x{1F646}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙆🏼‍♀️)
        '\\x{1F646}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙆🏼‍♂️)
        '\\x{1F646}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙆🏽‍♀️)
        '\\x{1F646}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙆🏽‍♂️)
        '\\x{1F646}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙆🏾‍♀️)
        '\\x{1F646}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙆🏾‍♂️)
        '\\x{1F646}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙆🏿‍♀️)
        '\\x{1F646}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙆🏿‍♂️)
        '\\x{1F647}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙇🏻‍♀️)
        '\\x{1F647}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙇🏻‍♂️)
        '\\x{1F647}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙇🏼‍♀️)
        '\\x{1F647}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙇🏼‍♂️)
        '\\x{1F647}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙇🏽‍♀️)
        '\\x{1F647}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙇🏽‍♂️)
        '\\x{1F647}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙇🏾‍♀️)
        '\\x{1F647}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙇🏾‍♂️)
        '\\x{1F647}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙇🏿‍♀️)
        '\\x{1F647}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙇🏿‍♂️)
        '\\x{1F64B}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙋🏻‍♀️)
        '\\x{1F64B}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙋🏻‍♂️)
        '\\x{1F64B}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙋🏼‍♀️)
        '\\x{1F64B}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙋🏼‍♂️)
        '\\x{1F64B}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙋🏽‍♀️)
        '\\x{1F64B}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙋🏽‍♂️)
        '\\x{1F64B}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙋🏾‍♀️)
        '\\x{1F64B}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙋🏾‍♂️)
        '\\x{1F64B}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙋🏿‍♀️)
        '\\x{1F64B}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙋🏿‍♂️)
        '\\x{1F64D}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙍🏻‍♀️)
        '\\x{1F64D}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙍🏻‍♂️)
        '\\x{1F64D}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙍🏼‍♀️)
        '\\x{1F64D}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙍🏼‍♂️)
        '\\x{1F64D}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙍🏽‍♀️)
        '\\x{1F64D}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙍🏽‍♂️)
        '\\x{1F64D}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙍🏾‍♀️)
        '\\x{1F64D}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙍🏾‍♂️)
        '\\x{1F64D}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙍🏿‍♀️)
        '\\x{1F64D}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙍🏿‍♂️)
        '\\x{1F64E}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙎🏻‍♀️)
        '\\x{1F64E}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙎🏻‍♂️)
        '\\x{1F64E}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙎🏼‍♀️)
        '\\x{1F64E}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙎🏼‍♂️)
        '\\x{1F64E}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙎🏽‍♀️)
        '\\x{1F64E}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙎🏽‍♂️)
        '\\x{1F64E}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙎🏾‍♀️)
        '\\x{1F64E}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙎🏾‍♂️)
        '\\x{1F64E}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙎🏿‍♀️)
        '\\x{1F64E}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙎🏿‍♂️)
        '\\x{1F6A3}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚣🏻‍♀️)
        '\\x{1F6A3}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚣🏻‍♂️)
        '\\x{1F6A3}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚣🏼‍♀️)
        '\\x{1F6A3}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚣🏼‍♂️)
        '\\x{1F6A3}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚣🏽‍♀️)
        '\\x{1F6A3}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚣🏽‍♂️)
        '\\x{1F6A3}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚣🏾‍♀️)
        '\\x{1F6A3}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚣🏾‍♂️)
        '\\x{1F6A3}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚣🏿‍♀️)
        '\\x{1F6A3}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚣🏿‍♂️)
        '\\x{1F6B4}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚴🏻‍♀️)
        '\\x{1F6B4}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚴🏻‍♂️)
        '\\x{1F6B4}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚴🏼‍♀️)
        '\\x{1F6B4}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚴🏼‍♂️)
        '\\x{1F6B4}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚴🏽‍♀️)
        '\\x{1F6B4}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚴🏽‍♂️)
        '\\x{1F6B4}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚴🏾‍♀️)
        '\\x{1F6B4}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚴🏾‍♂️)
        '\\x{1F6B4}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚴🏿‍♀️)
        '\\x{1F6B4}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚴🏿‍♂️)
        '\\x{1F6B5}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚵🏻‍♀️)
        '\\x{1F6B5}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚵🏻‍♂️)
        '\\x{1F6B5}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚵🏼‍♀️)
        '\\x{1F6B5}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚵🏼‍♂️)
        '\\x{1F6B5}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚵🏽‍♀️)
        '\\x{1F6B5}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚵🏽‍♂️)
        '\\x{1F6B5}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚵🏾‍♀️)
        '\\x{1F6B5}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚵🏾‍♂️)
        '\\x{1F6B5}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚵🏿‍♀️)
        '\\x{1F6B5}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚵🏿‍♂️)
        '\\x{1F6B6}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚶🏻‍♀️)
        '\\x{1F6B6}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚶🏻‍♂️)
        '\\x{1F6B6}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚶🏼‍♀️)
        '\\x{1F6B6}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚶🏼‍♂️)
        '\\x{1F6B6}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚶🏽‍♀️)
        '\\x{1F6B6}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚶🏽‍♂️)
        '\\x{1F6B6}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚶🏾‍♀️)
        '\\x{1F6B6}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚶🏾‍♂️)
        '\\x{1F6B6}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚶🏿‍♀️)
        '\\x{1F6B6}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚶🏿‍♂️)
        '\\x{1F926}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤦🏻‍♀️)
        '\\x{1F926}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤦🏻‍♂️)
        '\\x{1F926}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤦🏼‍♀️)
        '\\x{1F926}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤦🏼‍♂️)
        '\\x{1F926}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤦🏽‍♀️)
        '\\x{1F926}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤦🏽‍♂️)
        '\\x{1F926}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤦🏾‍♀️)
        '\\x{1F926}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤦🏾‍♂️)
        '\\x{1F926}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤦🏿‍♀️)
        '\\x{1F926}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤦🏿‍♂️)
        '\\x{1F935}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (🤵🏻‍♀️)
        '\\x{1F935}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (🤵🏻‍♂️)
        '\\x{1F935}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (🤵🏼‍♀️)
        '\\x{1F935}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (🤵🏼‍♂️)
        '\\x{1F935}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (🤵🏽‍♀️)
        '\\x{1F935}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (🤵🏽‍♂️)
        '\\x{1F935}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (🤵🏾‍♀️)
        '\\x{1F935}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (🤵🏾‍♂️)
        '\\x{1F935}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (🤵🏿‍♀️)
        '\\x{1F935}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (🤵🏿‍♂️)
        '\\x{1F937}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤷🏻‍♀️)
        '\\x{1F937}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤷🏻‍♂️)
        '\\x{1F937}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤷🏼‍♀️)
        '\\x{1F937}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤷🏼‍♂️)
        '\\x{1F937}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤷🏽‍♀️)
        '\\x{1F937}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤷🏽‍♂️)
        '\\x{1F937}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤷🏾‍♀️)
        '\\x{1F937}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤷🏾‍♂️)
        '\\x{1F937}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤷🏿‍♀️)
        '\\x{1F937}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤷🏿‍♂️)
        '\\x{1F938}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤸🏻‍♀️)
        '\\x{1F938}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤸🏻‍♂️)
        '\\x{1F938}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤸🏼‍♀️)
        '\\x{1F938}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤸🏼‍♂️)
        '\\x{1F938}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤸🏽‍♀️)
        '\\x{1F938}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤸🏽‍♂️)
        '\\x{1F938}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤸🏾‍♀️)
        '\\x{1F938}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤸🏾‍♂️)
        '\\x{1F938}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤸🏿‍♀️)
        '\\x{1F938}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤸🏿‍♂️)
        '\\x{1F939}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤹🏻‍♀️)
        '\\x{1F939}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤹🏻‍♂️)
        '\\x{1F939}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤹🏼‍♀️)
        '\\x{1F939}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤹🏼‍♂️)
        '\\x{1F939}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤹🏽‍♀️)
        '\\x{1F939}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤹🏽‍♂️)
        '\\x{1F939}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤹🏾‍♀️)
        '\\x{1F939}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤹🏾‍♂️)
        '\\x{1F939}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤹🏿‍♀️)
        '\\x{1F939}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤹🏿‍♂️)
        '\\x{1F93D}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤽🏻‍♀️)
        '\\x{1F93D}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤽🏻‍♂️)
        '\\x{1F93D}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤽🏼‍♀️)
        '\\x{1F93D}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤽🏼‍♂️)
        '\\x{1F93D}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤽🏽‍♀️)
        '\\x{1F93D}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤽🏽‍♂️)
        '\\x{1F93D}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤽🏾‍♀️)
        '\\x{1F93D}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤽🏾‍♂️)
        '\\x{1F93D}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤽🏿‍♀️)
        '\\x{1F93D}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤽🏿‍♂️)
        '\\x{1F93E}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤾🏻‍♀️)
        '\\x{1F93E}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤾🏻‍♂️)
        '\\x{1F93E}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤾🏼‍♀️)
        '\\x{1F93E}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤾🏼‍♂️)
        '\\x{1F93E}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤾🏽‍♀️)
        '\\x{1F93E}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤾🏽‍♂️)
        '\\x{1F93E}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤾🏾‍♀️)
        '\\x{1F93E}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤾🏾‍♂️)
        '\\x{1F93E}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤾🏿‍♀️)
        '\\x{1F93E}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤾🏿‍♂️)
        '\\x{1F9B8}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦸🏻‍♀️)
        '\\x{1F9B8}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦸🏻‍♂️)
        '\\x{1F9B8}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦸🏼‍♀️)
        '\\x{1F9B8}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦸🏼‍♂️)
        '\\x{1F9B8}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦸🏽‍♀️)
        '\\x{1F9B8}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦸🏽‍♂️)
        '\\x{1F9B8}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦸🏾‍♀️)
        '\\x{1F9B8}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦸🏾‍♂️)
        '\\x{1F9B8}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦸🏿‍♀️)
        '\\x{1F9B8}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦸🏿‍♂️)
        '\\x{1F9B9}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦹🏻‍♀️)
        '\\x{1F9B9}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦹🏻‍♂️)
        '\\x{1F9B9}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦹🏼‍♀️)
        '\\x{1F9B9}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦹🏼‍♂️)
        '\\x{1F9B9}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦹🏽‍♀️)
        '\\x{1F9B9}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦹🏽‍♂️)
        '\\x{1F9B9}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦹🏾‍♀️)
        '\\x{1F9B9}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦹🏾‍♂️)
        '\\x{1F9B9}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦹🏿‍♀️)
        '\\x{1F9B9}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦹🏿‍♂️)
        '\\x{1F9CD}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧍🏻‍♀️)
        '\\x{1F9CD}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧍🏻‍♂️)
        '\\x{1F9CD}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧍🏼‍♀️)
        '\\x{1F9CD}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧍🏼‍♂️)
        '\\x{1F9CD}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧍🏽‍♀️)
        '\\x{1F9CD}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧍🏽‍♂️)
        '\\x{1F9CD}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧍🏾‍♀️)
        '\\x{1F9CD}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧍🏾‍♂️)
        '\\x{1F9CD}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧍🏿‍♀️)
        '\\x{1F9CD}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧍🏿‍♂️)
        '\\x{1F9CE}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧎🏻‍♀️)
        '\\x{1F9CE}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧎🏻‍♂️)
        '\\x{1F9CE}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧎🏼‍♀️)
        '\\x{1F9CE}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧎🏼‍♂️)
        '\\x{1F9CE}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧎🏽‍♀️)
        '\\x{1F9CE}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧎🏽‍♂️)
        '\\x{1F9CE}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧎🏾‍♀️)
        '\\x{1F9CE}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧎🏾‍♂️)
        '\\x{1F9CE}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧎🏿‍♀️)
        '\\x{1F9CE}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧎🏿‍♂️)
        '\\x{1F9CF}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧏🏻‍♀️)
        '\\x{1F9CF}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧏🏻‍♂️)
        '\\x{1F9CF}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧏🏼‍♀️)
        '\\x{1F9CF}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧏🏼‍♂️)
        '\\x{1F9CF}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧏🏽‍♀️)
        '\\x{1F9CF}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧏🏽‍♂️)
        '\\x{1F9CF}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧏🏾‍♀️)
        '\\x{1F9CF}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧏🏾‍♂️)
        '\\x{1F9CF}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧏🏿‍♀️)
        '\\x{1F9CF}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧏🏿‍♂️)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2695}\\x{FE0F}', // E12.1  [1] (🧑🏻‍⚕️)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2696}\\x{FE0F}', // E12.1  [1] (🧑🏻‍⚖️)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{2708}\\x{FE0F}', // E12.1  [1] (🧑🏻‍✈️)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2695}\\x{FE0F}', // E12.1  [1] (🧑🏼‍⚕️)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2696}\\x{FE0F}', // E12.1  [1] (🧑🏼‍⚖️)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{2708}\\x{FE0F}', // E12.1  [1] (🧑🏼‍✈️)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2695}\\x{FE0F}', // E12.1  [1] (🧑🏽‍⚕️)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2696}\\x{FE0F}', // E12.1  [1] (🧑🏽‍⚖️)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{2708}\\x{FE0F}', // E12.1  [1] (🧑🏽‍✈️)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2695}\\x{FE0F}', // E12.1  [1] (🧑🏾‍⚕️)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2696}\\x{FE0F}', // E12.1  [1] (🧑🏾‍⚖️)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{2708}\\x{FE0F}', // E12.1  [1] (🧑🏾‍✈️)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2695}\\x{FE0F}', // E12.1  [1] (🧑🏿‍⚕️)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2696}\\x{FE0F}', // E12.1  [1] (🧑🏿‍⚖️)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{2708}\\x{FE0F}', // E12.1  [1] (🧑🏿‍✈️)
        '\\x{1F9D1}\\x{200D}\\x{1F91D}\\x{200D}\\x{1F9D1}', // E12.0  [1] (🧑‍🤝‍🧑)
        '\\x{1F9D4}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E13.1  [1] (🧔🏻‍♀️)
        '\\x{1F9D4}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E13.1  [1] (🧔🏻‍♂️)
        '\\x{1F9D4}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E13.1  [1] (🧔🏼‍♀️)
        '\\x{1F9D4}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E13.1  [1] (🧔🏼‍♂️)
        '\\x{1F9D4}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E13.1  [1] (🧔🏽‍♀️)
        '\\x{1F9D4}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E13.1  [1] (🧔🏽‍♂️)
        '\\x{1F9D4}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E13.1  [1] (🧔🏾‍♀️)
        '\\x{1F9D4}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E13.1  [1] (🧔🏾‍♂️)
        '\\x{1F9D4}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E13.1  [1] (🧔🏿‍♀️)
        '\\x{1F9D4}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E13.1  [1] (🧔🏿‍♂️)
        '\\x{1F9D6}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧖🏻‍♀️)
        '\\x{1F9D6}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧖🏻‍♂️)
        '\\x{1F9D6}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧖🏼‍♀️)
        '\\x{1F9D6}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧖🏼‍♂️)
        '\\x{1F9D6}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧖🏽‍♀️)
        '\\x{1F9D6}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧖🏽‍♂️)
        '\\x{1F9D6}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧖🏾‍♀️)
        '\\x{1F9D6}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧖🏾‍♂️)
        '\\x{1F9D6}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧖🏿‍♀️)
        '\\x{1F9D6}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧖🏿‍♂️)
        '\\x{1F9D7}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧗🏻‍♀️)
        '\\x{1F9D7}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧗🏻‍♂️)
        '\\x{1F9D7}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧗🏼‍♀️)
        '\\x{1F9D7}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧗🏼‍♂️)
        '\\x{1F9D7}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧗🏽‍♀️)
        '\\x{1F9D7}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧗🏽‍♂️)
        '\\x{1F9D7}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧗🏾‍♀️)
        '\\x{1F9D7}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧗🏾‍♂️)
        '\\x{1F9D7}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧗🏿‍♀️)
        '\\x{1F9D7}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧗🏿‍♂️)
        '\\x{1F9D8}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧘🏻‍♀️)
        '\\x{1F9D8}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧘🏻‍♂️)
        '\\x{1F9D8}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧘🏼‍♀️)
        '\\x{1F9D8}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧘🏼‍♂️)
        '\\x{1F9D8}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧘🏽‍♀️)
        '\\x{1F9D8}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧘🏽‍♂️)
        '\\x{1F9D8}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧘🏾‍♀️)
        '\\x{1F9D8}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧘🏾‍♂️)
        '\\x{1F9D8}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧘🏿‍♀️)
        '\\x{1F9D8}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧘🏿‍♂️)
        '\\x{1F9D9}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧙🏻‍♀️)
        '\\x{1F9D9}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧙🏻‍♂️)
        '\\x{1F9D9}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧙🏼‍♀️)
        '\\x{1F9D9}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧙🏼‍♂️)
        '\\x{1F9D9}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧙🏽‍♀️)
        '\\x{1F9D9}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧙🏽‍♂️)
        '\\x{1F9D9}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧙🏾‍♀️)
        '\\x{1F9D9}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧙🏾‍♂️)
        '\\x{1F9D9}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧙🏿‍♀️)
        '\\x{1F9D9}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧙🏿‍♂️)
        '\\x{1F9DA}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧚🏻‍♀️)
        '\\x{1F9DA}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧚🏻‍♂️)
        '\\x{1F9DA}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧚🏼‍♀️)
        '\\x{1F9DA}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧚🏼‍♂️)
        '\\x{1F9DA}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧚🏽‍♀️)
        '\\x{1F9DA}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧚🏽‍♂️)
        '\\x{1F9DA}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧚🏾‍♀️)
        '\\x{1F9DA}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧚🏾‍♂️)
        '\\x{1F9DA}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧚🏿‍♀️)
        '\\x{1F9DA}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧚🏿‍♂️)
        '\\x{1F9DB}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧛🏻‍♀️)
        '\\x{1F9DB}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧛🏻‍♂️)
        '\\x{1F9DB}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧛🏼‍♀️)
        '\\x{1F9DB}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧛🏼‍♂️)
        '\\x{1F9DB}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧛🏽‍♀️)
        '\\x{1F9DB}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧛🏽‍♂️)
        '\\x{1F9DB}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧛🏾‍♀️)
        '\\x{1F9DB}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧛🏾‍♂️)
        '\\x{1F9DB}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧛🏿‍♀️)
        '\\x{1F9DB}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧛🏿‍♂️)
        '\\x{1F9DC}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧜🏻‍♀️)
        '\\x{1F9DC}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧜🏻‍♂️)
        '\\x{1F9DC}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧜🏼‍♀️)
        '\\x{1F9DC}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧜🏼‍♂️)
        '\\x{1F9DC}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧜🏽‍♀️)
        '\\x{1F9DC}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧜🏽‍♂️)
        '\\x{1F9DC}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧜🏾‍♀️)
        '\\x{1F9DC}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧜🏾‍♂️)
        '\\x{1F9DC}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧜🏿‍♀️)
        '\\x{1F9DC}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧜🏿‍♂️)
        '\\x{1F9DD}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧝🏻‍♀️)
        '\\x{1F9DD}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧝🏻‍♂️)
        '\\x{1F9DD}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧝🏼‍♀️)
        '\\x{1F9DD}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧝🏼‍♂️)
        '\\x{1F9DD}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧝🏽‍♀️)
        '\\x{1F9DD}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧝🏽‍♂️)
        '\\x{1F9DD}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧝🏾‍♀️)
        '\\x{1F9DD}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧝🏾‍♂️)
        '\\x{1F9DD}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧝🏿‍♀️)
        '\\x{1F9DD}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧝🏿‍♂️)
        '\\x{26F9}\\x{1F3FB}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (⛹🏻‍♀️)
        '\\x{26F9}\\x{1F3FB}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (⛹🏻‍♂️)
        '\\x{26F9}\\x{1F3FC}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (⛹🏼‍♀️)
        '\\x{26F9}\\x{1F3FC}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (⛹🏼‍♂️)
        '\\x{26F9}\\x{1F3FD}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (⛹🏽‍♀️)
        '\\x{26F9}\\x{1F3FD}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (⛹🏽‍♂️)
        '\\x{26F9}\\x{1F3FE}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (⛹🏾‍♀️)
        '\\x{26F9}\\x{1F3FE}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (⛹🏾‍♂️)
        '\\x{26F9}\\x{1F3FF}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (⛹🏿‍♀️)
        '\\x{26F9}\\x{1F3FF}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (⛹🏿‍♂️)
        '\\x{26F9}\\x{FE0F}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (⛹️‍♀️)
        '\\x{26F9}\\x{FE0F}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (⛹️‍♂️)
        '\\x{1F3C3}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏃‍♀️)
        '\\x{1F3C3}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏃‍♂️)
        '\\x{1F3C4}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏄‍♀️)
        '\\x{1F3C4}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏄‍♂️)
        '\\x{1F3CA}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🏊‍♀️)
        '\\x{1F3CA}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🏊‍♂️)
        '\\x{1F3F3}\\x{FE0F}\\x{200D}\\x{1F308}', // E4.0   [1] (🏳️‍🌈)
        '\\x{1F3F4}\\x{200D}\\x{2620}\\x{FE0F}', // E11.0  [1] (🏴‍☠️)
        '\\x{1F43B}\\x{200D}\\x{2744}\\x{FE0F}', // E13.0  [1] (🐻‍❄️)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F33E}', // E4.0   [1] (👨🏻‍🌾)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F373}', // E4.0   [1] (👨🏻‍🍳)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F37C}', // E13.0  [1] (👨🏻‍🍼)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F393}', // E4.0   [1] (👨🏻‍🎓)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👨🏻‍🎤)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👨🏻‍🎨)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👨🏻‍🏫)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👨🏻‍🏭)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👨🏻‍💻)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👨🏻‍💼)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F527}', // E4.0   [1] (👨🏻‍🔧)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F52C}', // E4.0   [1] (👨🏻‍🔬)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F680}', // E4.0   [1] (👨🏻‍🚀)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F692}', // E4.0   [1] (👨🏻‍🚒)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👨🏻‍🦯)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👨🏻‍🦰)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👨🏻‍🦱)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👨🏻‍🦲)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👨🏻‍🦳)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👨🏻‍🦼)
        '\\x{1F468}\\x{1F3FB}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👨🏻‍🦽)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F33E}', // E4.0   [1] (👨🏼‍🌾)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F373}', // E4.0   [1] (👨🏼‍🍳)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F37C}', // E13.0  [1] (👨🏼‍🍼)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F393}', // E4.0   [1] (👨🏼‍🎓)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👨🏼‍🎤)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👨🏼‍🎨)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👨🏼‍🏫)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👨🏼‍🏭)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👨🏼‍💻)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👨🏼‍💼)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F527}', // E4.0   [1] (👨🏼‍🔧)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F52C}', // E4.0   [1] (👨🏼‍🔬)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F680}', // E4.0   [1] (👨🏼‍🚀)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F692}', // E4.0   [1] (👨🏼‍🚒)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👨🏼‍🦯)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👨🏼‍🦰)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👨🏼‍🦱)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👨🏼‍🦲)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👨🏼‍🦳)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👨🏼‍🦼)
        '\\x{1F468}\\x{1F3FC}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👨🏼‍🦽)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F33E}', // E4.0   [1] (👨🏽‍🌾)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F373}', // E4.0   [1] (👨🏽‍🍳)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F37C}', // E13.0  [1] (👨🏽‍🍼)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F393}', // E4.0   [1] (👨🏽‍🎓)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👨🏽‍🎤)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👨🏽‍🎨)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👨🏽‍🏫)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👨🏽‍🏭)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👨🏽‍💻)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👨🏽‍💼)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F527}', // E4.0   [1] (👨🏽‍🔧)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F52C}', // E4.0   [1] (👨🏽‍🔬)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F680}', // E4.0   [1] (👨🏽‍🚀)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F692}', // E4.0   [1] (👨🏽‍🚒)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👨🏽‍🦯)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👨🏽‍🦰)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👨🏽‍🦱)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👨🏽‍🦲)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👨🏽‍🦳)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👨🏽‍🦼)
        '\\x{1F468}\\x{1F3FD}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👨🏽‍🦽)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F33E}', // E4.0   [1] (👨🏾‍🌾)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F373}', // E4.0   [1] (👨🏾‍🍳)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F37C}', // E13.0  [1] (👨🏾‍🍼)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F393}', // E4.0   [1] (👨🏾‍🎓)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👨🏾‍🎤)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👨🏾‍🎨)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👨🏾‍🏫)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👨🏾‍🏭)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👨🏾‍💻)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👨🏾‍💼)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F527}', // E4.0   [1] (👨🏾‍🔧)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F52C}', // E4.0   [1] (👨🏾‍🔬)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F680}', // E4.0   [1] (👨🏾‍🚀)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F692}', // E4.0   [1] (👨🏾‍🚒)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👨🏾‍🦯)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👨🏾‍🦰)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👨🏾‍🦱)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👨🏾‍🦲)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👨🏾‍🦳)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👨🏾‍🦼)
        '\\x{1F468}\\x{1F3FE}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👨🏾‍🦽)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F33E}', // E4.0   [1] (👨🏿‍🌾)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F373}', // E4.0   [1] (👨🏿‍🍳)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F37C}', // E13.0  [1] (👨🏿‍🍼)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F393}', // E4.0   [1] (👨🏿‍🎓)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👨🏿‍🎤)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👨🏿‍🎨)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👨🏿‍🏫)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👨🏿‍🏭)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👨🏿‍💻)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👨🏿‍💼)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F527}', // E4.0   [1] (👨🏿‍🔧)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F52C}', // E4.0   [1] (👨🏿‍🔬)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F680}', // E4.0   [1] (👨🏿‍🚀)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F692}', // E4.0   [1] (👨🏿‍🚒)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👨🏿‍🦯)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👨🏿‍🦰)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👨🏿‍🦱)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👨🏿‍🦲)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👨🏿‍🦳)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👨🏿‍🦼)
        '\\x{1F468}\\x{1F3FF}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👨🏿‍🦽)
        '\\x{1F468}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👨‍⚕️)
        '\\x{1F468}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👨‍⚖️)
        '\\x{1F468}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👨‍✈️)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F33E}', // E4.0   [1] (👩🏻‍🌾)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F373}', // E4.0   [1] (👩🏻‍🍳)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F37C}', // E13.0  [1] (👩🏻‍🍼)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F393}', // E4.0   [1] (👩🏻‍🎓)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👩🏻‍🎤)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👩🏻‍🎨)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👩🏻‍🏫)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👩🏻‍🏭)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👩🏻‍💻)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👩🏻‍💼)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F527}', // E4.0   [1] (👩🏻‍🔧)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F52C}', // E4.0   [1] (👩🏻‍🔬)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F680}', // E4.0   [1] (👩🏻‍🚀)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F692}', // E4.0   [1] (👩🏻‍🚒)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👩🏻‍🦯)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👩🏻‍🦰)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👩🏻‍🦱)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👩🏻‍🦲)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👩🏻‍🦳)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👩🏻‍🦼)
        '\\x{1F469}\\x{1F3FB}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👩🏻‍🦽)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F33E}', // E4.0   [1] (👩🏼‍🌾)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F373}', // E4.0   [1] (👩🏼‍🍳)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F37C}', // E13.0  [1] (👩🏼‍🍼)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F393}', // E4.0   [1] (👩🏼‍🎓)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👩🏼‍🎤)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👩🏼‍🎨)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👩🏼‍🏫)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👩🏼‍🏭)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👩🏼‍💻)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👩🏼‍💼)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F527}', // E4.0   [1] (👩🏼‍🔧)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F52C}', // E4.0   [1] (👩🏼‍🔬)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F680}', // E4.0   [1] (👩🏼‍🚀)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F692}', // E4.0   [1] (👩🏼‍🚒)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👩🏼‍🦯)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👩🏼‍🦰)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👩🏼‍🦱)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👩🏼‍🦲)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👩🏼‍🦳)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👩🏼‍🦼)
        '\\x{1F469}\\x{1F3FC}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👩🏼‍🦽)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F33E}', // E4.0   [1] (👩🏽‍🌾)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F373}', // E4.0   [1] (👩🏽‍🍳)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F37C}', // E13.0  [1] (👩🏽‍🍼)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F393}', // E4.0   [1] (👩🏽‍🎓)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👩🏽‍🎤)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👩🏽‍🎨)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👩🏽‍🏫)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👩🏽‍🏭)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👩🏽‍💻)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👩🏽‍💼)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F527}', // E4.0   [1] (👩🏽‍🔧)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F52C}', // E4.0   [1] (👩🏽‍🔬)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F680}', // E4.0   [1] (👩🏽‍🚀)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F692}', // E4.0   [1] (👩🏽‍🚒)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👩🏽‍🦯)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👩🏽‍🦰)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👩🏽‍🦱)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👩🏽‍🦲)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👩🏽‍🦳)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👩🏽‍🦼)
        '\\x{1F469}\\x{1F3FD}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👩🏽‍🦽)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F33E}', // E4.0   [1] (👩🏾‍🌾)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F373}', // E4.0   [1] (👩🏾‍🍳)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F37C}', // E13.0  [1] (👩🏾‍🍼)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F393}', // E4.0   [1] (👩🏾‍🎓)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👩🏾‍🎤)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👩🏾‍🎨)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👩🏾‍🏫)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👩🏾‍🏭)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👩🏾‍💻)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👩🏾‍💼)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F527}', // E4.0   [1] (👩🏾‍🔧)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F52C}', // E4.0   [1] (👩🏾‍🔬)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F680}', // E4.0   [1] (👩🏾‍🚀)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F692}', // E4.0   [1] (👩🏾‍🚒)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👩🏾‍🦯)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👩🏾‍🦰)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👩🏾‍🦱)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👩🏾‍🦲)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👩🏾‍🦳)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👩🏾‍🦼)
        '\\x{1F469}\\x{1F3FE}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👩🏾‍🦽)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F33E}', // E4.0   [1] (👩🏿‍🌾)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F373}', // E4.0   [1] (👩🏿‍🍳)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F37C}', // E13.0  [1] (👩🏿‍🍼)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F393}', // E4.0   [1] (👩🏿‍🎓)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👩🏿‍🎤)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👩🏿‍🎨)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👩🏿‍🏫)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👩🏿‍🏭)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👩🏿‍💻)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👩🏿‍💼)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F527}', // E4.0   [1] (👩🏿‍🔧)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F52C}', // E4.0   [1] (👩🏿‍🔬)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F680}', // E4.0   [1] (👩🏿‍🚀)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F692}', // E4.0   [1] (👩🏿‍🚒)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👩🏿‍🦯)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👩🏿‍🦰)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👩🏿‍🦱)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👩🏿‍🦲)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👩🏿‍🦳)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👩🏿‍🦼)
        '\\x{1F469}\\x{1F3FF}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👩🏿‍🦽)
        '\\x{1F469}\\x{200D}\\x{2695}\\x{FE0F}', // E4.0   [1] (👩‍⚕️)
        '\\x{1F469}\\x{200D}\\x{2696}\\x{FE0F}', // E4.0   [1] (👩‍⚖️)
        '\\x{1F469}\\x{200D}\\x{2708}\\x{FE0F}', // E4.0   [1] (👩‍✈️)
        '\\x{1F46E}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👮‍♀️)
        '\\x{1F46E}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👮‍♂️)
        '\\x{1F46F}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👯‍♀️)
        '\\x{1F46F}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👯‍♂️)
        '\\x{1F470}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (👰‍♀️)
        '\\x{1F470}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (👰‍♂️)
        '\\x{1F471}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👱‍♀️)
        '\\x{1F471}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👱‍♂️)
        '\\x{1F473}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👳‍♀️)
        '\\x{1F473}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👳‍♂️)
        '\\x{1F477}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (👷‍♀️)
        '\\x{1F477}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (👷‍♂️)
        '\\x{1F481}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💁‍♀️)
        '\\x{1F481}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💁‍♂️)
        '\\x{1F482}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💂‍♀️)
        '\\x{1F482}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💂‍♂️)
        '\\x{1F486}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💆‍♀️)
        '\\x{1F486}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💆‍♂️)
        '\\x{1F487}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (💇‍♀️)
        '\\x{1F487}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (💇‍♂️)
        '\\x{1F636}\\x{200D}\\x{1F32B}\\x{FE0F}', // E13.1  [1] (😶‍🌫️)
        '\\x{1F645}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙅‍♀️)
        '\\x{1F645}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙅‍♂️)
        '\\x{1F646}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙆‍♀️)
        '\\x{1F646}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙆‍♂️)
        '\\x{1F647}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙇‍♀️)
        '\\x{1F647}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙇‍♂️)
        '\\x{1F64B}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙋‍♀️)
        '\\x{1F64B}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙋‍♂️)
        '\\x{1F64D}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙍‍♀️)
        '\\x{1F64D}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙍‍♂️)
        '\\x{1F64E}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🙎‍♀️)
        '\\x{1F64E}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🙎‍♂️)
        '\\x{1F6A3}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚣‍♀️)
        '\\x{1F6A3}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚣‍♂️)
        '\\x{1F6B4}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚴‍♀️)
        '\\x{1F6B4}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚴‍♂️)
        '\\x{1F6B5}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚵‍♀️)
        '\\x{1F6B5}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚵‍♂️)
        '\\x{1F6B6}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🚶‍♀️)
        '\\x{1F6B6}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🚶‍♂️)
        '\\x{1F926}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤦‍♀️)
        '\\x{1F926}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤦‍♂️)
        '\\x{1F935}\\x{200D}\\x{2640}\\x{FE0F}', // E13.0  [1] (🤵‍♀️)
        '\\x{1F935}\\x{200D}\\x{2642}\\x{FE0F}', // E13.0  [1] (🤵‍♂️)
        '\\x{1F937}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤷‍♀️)
        '\\x{1F937}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤷‍♂️)
        '\\x{1F938}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤸‍♀️)
        '\\x{1F938}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤸‍♂️)
        '\\x{1F939}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤹‍♀️)
        '\\x{1F939}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤹‍♂️)
        '\\x{1F93C}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤼‍♀️)
        '\\x{1F93C}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤼‍♂️)
        '\\x{1F93D}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤽‍♀️)
        '\\x{1F93D}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤽‍♂️)
        '\\x{1F93E}\\x{200D}\\x{2640}\\x{FE0F}', // E4.0   [1] (🤾‍♀️)
        '\\x{1F93E}\\x{200D}\\x{2642}\\x{FE0F}', // E4.0   [1] (🤾‍♂️)
        '\\x{1F9B8}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦸‍♀️)
        '\\x{1F9B8}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦸‍♂️)
        '\\x{1F9B9}\\x{200D}\\x{2640}\\x{FE0F}', // E11.0  [1] (🦹‍♀️)
        '\\x{1F9B9}\\x{200D}\\x{2642}\\x{FE0F}', // E11.0  [1] (🦹‍♂️)
        '\\x{1F9CD}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧍‍♀️)
        '\\x{1F9CD}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧍‍♂️)
        '\\x{1F9CE}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧎‍♀️)
        '\\x{1F9CE}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧎‍♂️)
        '\\x{1F9CF}\\x{200D}\\x{2640}\\x{FE0F}', // E12.0  [1] (🧏‍♀️)
        '\\x{1F9CF}\\x{200D}\\x{2642}\\x{FE0F}', // E12.0  [1] (🧏‍♂️)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F33E}', // E12.1  [1] (🧑🏻‍🌾)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F373}', // E12.1  [1] (🧑🏻‍🍳)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F37C}', // E13.0  [1] (🧑🏻‍🍼)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F384}', // E13.0  [1] (🧑🏻‍🎄)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F393}', // E12.1  [1] (🧑🏻‍🎓)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F3A4}', // E12.1  [1] (🧑🏻‍🎤)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F3A8}', // E12.1  [1] (🧑🏻‍🎨)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F3EB}', // E12.1  [1] (🧑🏻‍🏫)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F3ED}', // E12.1  [1] (🧑🏻‍🏭)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F4BB}', // E12.1  [1] (🧑🏻‍💻)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F4BC}', // E12.1  [1] (🧑🏻‍💼)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F527}', // E12.1  [1] (🧑🏻‍🔧)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F52C}', // E12.1  [1] (🧑🏻‍🔬)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F680}', // E12.1  [1] (🧑🏻‍🚀)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F692}', // E12.1  [1] (🧑🏻‍🚒)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F9AF}', // E12.1  [1] (🧑🏻‍🦯)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F9B0}', // E12.1  [1] (🧑🏻‍🦰)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F9B1}', // E12.1  [1] (🧑🏻‍🦱)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F9B2}', // E12.1  [1] (🧑🏻‍🦲)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F9B3}', // E12.1  [1] (🧑🏻‍🦳)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F9BC}', // E12.1  [1] (🧑🏻‍🦼)
        '\\x{1F9D1}\\x{1F3FB}\\x{200D}\\x{1F9BD}', // E12.1  [1] (🧑🏻‍🦽)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F33E}', // E12.1  [1] (🧑🏼‍🌾)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F373}', // E12.1  [1] (🧑🏼‍🍳)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F37C}', // E13.0  [1] (🧑🏼‍🍼)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F384}', // E13.0  [1] (🧑🏼‍🎄)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F393}', // E12.1  [1] (🧑🏼‍🎓)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F3A4}', // E12.1  [1] (🧑🏼‍🎤)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F3A8}', // E12.1  [1] (🧑🏼‍🎨)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F3EB}', // E12.1  [1] (🧑🏼‍🏫)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F3ED}', // E12.1  [1] (🧑🏼‍🏭)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F4BB}', // E12.1  [1] (🧑🏼‍💻)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F4BC}', // E12.1  [1] (🧑🏼‍💼)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F527}', // E12.1  [1] (🧑🏼‍🔧)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F52C}', // E12.1  [1] (🧑🏼‍🔬)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F680}', // E12.1  [1] (🧑🏼‍🚀)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F692}', // E12.1  [1] (🧑🏼‍🚒)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F9AF}', // E12.1  [1] (🧑🏼‍🦯)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F9B0}', // E12.1  [1] (🧑🏼‍🦰)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F9B1}', // E12.1  [1] (🧑🏼‍🦱)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F9B2}', // E12.1  [1] (🧑🏼‍🦲)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F9B3}', // E12.1  [1] (🧑🏼‍🦳)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F9BC}', // E12.1  [1] (🧑🏼‍🦼)
        '\\x{1F9D1}\\x{1F3FC}\\x{200D}\\x{1F9BD}', // E12.1  [1] (🧑🏼‍🦽)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F33E}', // E12.1  [1] (🧑🏽‍🌾)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F373}', // E12.1  [1] (🧑🏽‍🍳)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F37C}', // E13.0  [1] (🧑🏽‍🍼)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F384}', // E13.0  [1] (🧑🏽‍🎄)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F393}', // E12.1  [1] (🧑🏽‍🎓)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F3A4}', // E12.1  [1] (🧑🏽‍🎤)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F3A8}', // E12.1  [1] (🧑🏽‍🎨)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F3EB}', // E12.1  [1] (🧑🏽‍🏫)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F3ED}', // E12.1  [1] (🧑🏽‍🏭)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F4BB}', // E12.1  [1] (🧑🏽‍💻)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F4BC}', // E12.1  [1] (🧑🏽‍💼)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F527}', // E12.1  [1] (🧑🏽‍🔧)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F52C}', // E12.1  [1] (🧑🏽‍🔬)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F680}', // E12.1  [1] (🧑🏽‍🚀)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F692}', // E12.1  [1] (🧑🏽‍🚒)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F9AF}', // E12.1  [1] (🧑🏽‍🦯)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F9B0}', // E12.1  [1] (🧑🏽‍🦰)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F9B1}', // E12.1  [1] (🧑🏽‍🦱)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F9B2}', // E12.1  [1] (🧑🏽‍🦲)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F9B3}', // E12.1  [1] (🧑🏽‍🦳)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F9BC}', // E12.1  [1] (🧑🏽‍🦼)
        '\\x{1F9D1}\\x{1F3FD}\\x{200D}\\x{1F9BD}', // E12.1  [1] (🧑🏽‍🦽)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F33E}', // E12.1  [1] (🧑🏾‍🌾)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F373}', // E12.1  [1] (🧑🏾‍🍳)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F37C}', // E13.0  [1] (🧑🏾‍🍼)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F384}', // E13.0  [1] (🧑🏾‍🎄)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F393}', // E12.1  [1] (🧑🏾‍🎓)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F3A4}', // E12.1  [1] (🧑🏾‍🎤)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F3A8}', // E12.1  [1] (🧑🏾‍🎨)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F3EB}', // E12.1  [1] (🧑🏾‍🏫)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F3ED}', // E12.1  [1] (🧑🏾‍🏭)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F4BB}', // E12.1  [1] (🧑🏾‍💻)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F4BC}', // E12.1  [1] (🧑🏾‍💼)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F527}', // E12.1  [1] (🧑🏾‍🔧)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F52C}', // E12.1  [1] (🧑🏾‍🔬)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F680}', // E12.1  [1] (🧑🏾‍🚀)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F692}', // E12.1  [1] (🧑🏾‍🚒)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F9AF}', // E12.1  [1] (🧑🏾‍🦯)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F9B0}', // E12.1  [1] (🧑🏾‍🦰)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F9B1}', // E12.1  [1] (🧑🏾‍🦱)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F9B2}', // E12.1  [1] (🧑🏾‍🦲)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F9B3}', // E12.1  [1] (🧑🏾‍🦳)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F9BC}', // E12.1  [1] (🧑🏾‍🦼)
        '\\x{1F9D1}\\x{1F3FE}\\x{200D}\\x{1F9BD}', // E12.1  [1] (🧑🏾‍🦽)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F33E}', // E12.1  [1] (🧑🏿‍🌾)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F373}', // E12.1  [1] (🧑🏿‍🍳)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F37C}', // E13.0  [1] (🧑🏿‍🍼)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F384}', // E13.0  [1] (🧑🏿‍🎄)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F393}', // E12.1  [1] (🧑🏿‍🎓)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F3A4}', // E12.1  [1] (🧑🏿‍🎤)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F3A8}', // E12.1  [1] (🧑🏿‍🎨)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F3EB}', // E12.1  [1] (🧑🏿‍🏫)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F3ED}', // E12.1  [1] (🧑🏿‍🏭)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F4BB}', // E12.1  [1] (🧑🏿‍💻)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F4BC}', // E12.1  [1] (🧑🏿‍💼)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F527}', // E12.1  [1] (🧑🏿‍🔧)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F52C}', // E12.1  [1] (🧑🏿‍🔬)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F680}', // E12.1  [1] (🧑🏿‍🚀)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F692}', // E12.1  [1] (🧑🏿‍🚒)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F9AF}', // E12.1  [1] (🧑🏿‍🦯)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F9B0}', // E12.1  [1] (🧑🏿‍🦰)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F9B1}', // E12.1  [1] (🧑🏿‍🦱)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F9B2}', // E12.1  [1] (🧑🏿‍🦲)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F9B3}', // E12.1  [1] (🧑🏿‍🦳)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F9BC}', // E12.1  [1] (🧑🏿‍🦼)
        '\\x{1F9D1}\\x{1F3FF}\\x{200D}\\x{1F9BD}', // E12.1  [1] (🧑🏿‍🦽)
        '\\x{1F9D1}\\x{200D}\\x{2695}\\x{FE0F}', // E12.1  [1] (🧑‍⚕️)
        '\\x{1F9D1}\\x{200D}\\x{2696}\\x{FE0F}', // E12.1  [1] (🧑‍⚖️)
        '\\x{1F9D1}\\x{200D}\\x{2708}\\x{FE0F}', // E12.1  [1] (🧑‍✈️)
        '\\x{1F9D4}\\x{200D}\\x{2640}\\x{FE0F}', // E13.1  [1] (🧔‍♀️)
        '\\x{1F9D4}\\x{200D}\\x{2642}\\x{FE0F}', // E13.1  [1] (🧔‍♂️)
        '\\x{1F9D6}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧖‍♀️)
        '\\x{1F9D6}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧖‍♂️)
        '\\x{1F9D7}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧗‍♀️)
        '\\x{1F9D7}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧗‍♂️)
        '\\x{1F9D8}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧘‍♀️)
        '\\x{1F9D8}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧘‍♂️)
        '\\x{1F9D9}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧙‍♀️)
        '\\x{1F9D9}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧙‍♂️)
        '\\x{1F9DA}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧚‍♀️)
        '\\x{1F9DA}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧚‍♂️)
        '\\x{1F9DB}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧛‍♀️)
        '\\x{1F9DB}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧛‍♂️)
        '\\x{1F9DC}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧜‍♀️)
        '\\x{1F9DC}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧜‍♂️)
        '\\x{1F9DD}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧝‍♀️)
        '\\x{1F9DD}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧝‍♂️)
        '\\x{1F9DE}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧞‍♀️)
        '\\x{1F9DE}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧞‍♂️)
        '\\x{1F9DF}\\x{200D}\\x{2640}\\x{FE0F}', // E5.0   [1] (🧟‍♀️)
        '\\x{1F9DF}\\x{200D}\\x{2642}\\x{FE0F}', // E5.0   [1] (🧟‍♂️)
        '\\x{2764}\\x{FE0F}\\x{200D}\\x{1F525}', // E13.1  [1] (❤️‍🔥)
        '\\x{2764}\\x{FE0F}\\x{200D}\\x{1FA79}', // E13.1  [1] (❤️‍🩹)
        '\\x{1F408}\\x{200D}\\x{2B1B}', // E13.0  [1] (🐈‍⬛)
        '\\x{1F415}\\x{200D}\\x{1F9BA}', // E12.0  [1] (🐕‍🦺)
        '\\x{1F468}\\x{200D}\\x{1F33E}', // E4.0   [1] (👨‍🌾)
        '\\x{1F468}\\x{200D}\\x{1F373}', // E4.0   [1] (👨‍🍳)
        '\\x{1F468}\\x{200D}\\x{1F37C}', // E13.0  [1] (👨‍🍼)
        '\\x{1F468}\\x{200D}\\x{1F393}', // E4.0   [1] (👨‍🎓)
        '\\x{1F468}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👨‍🎤)
        '\\x{1F468}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👨‍🎨)
        '\\x{1F468}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👨‍🏫)
        '\\x{1F468}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👨‍🏭)
        '\\x{1F468}\\x{200D}\\x{1F466}', // E4.0   [1] (👨‍👦)
        '\\x{1F468}\\x{200D}\\x{1F467}', // E4.0   [1] (👨‍👧)
        '\\x{1F468}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👨‍💻)
        '\\x{1F468}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👨‍💼)
        '\\x{1F468}\\x{200D}\\x{1F527}', // E4.0   [1] (👨‍🔧)
        '\\x{1F468}\\x{200D}\\x{1F52C}', // E4.0   [1] (👨‍🔬)
        '\\x{1F468}\\x{200D}\\x{1F680}', // E4.0   [1] (👨‍🚀)
        '\\x{1F468}\\x{200D}\\x{1F692}', // E4.0   [1] (👨‍🚒)
        '\\x{1F468}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👨‍🦯)
        '\\x{1F468}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👨‍🦰)
        '\\x{1F468}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👨‍🦱)
        '\\x{1F468}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👨‍🦲)
        '\\x{1F468}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👨‍🦳)
        '\\x{1F468}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👨‍🦼)
        '\\x{1F468}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👨‍🦽)
        '\\x{1F469}\\x{200D}\\x{1F33E}', // E4.0   [1] (👩‍🌾)
        '\\x{1F469}\\x{200D}\\x{1F373}', // E4.0   [1] (👩‍🍳)
        '\\x{1F469}\\x{200D}\\x{1F37C}', // E13.0  [1] (👩‍🍼)
        '\\x{1F469}\\x{200D}\\x{1F393}', // E4.0   [1] (👩‍🎓)
        '\\x{1F469}\\x{200D}\\x{1F3A4}', // E4.0   [1] (👩‍🎤)
        '\\x{1F469}\\x{200D}\\x{1F3A8}', // E4.0   [1] (👩‍🎨)
        '\\x{1F469}\\x{200D}\\x{1F3EB}', // E4.0   [1] (👩‍🏫)
        '\\x{1F469}\\x{200D}\\x{1F3ED}', // E4.0   [1] (👩‍🏭)
        '\\x{1F469}\\x{200D}\\x{1F466}', // E4.0   [1] (👩‍👦)
        '\\x{1F469}\\x{200D}\\x{1F467}', // E4.0   [1] (👩‍👧)
        '\\x{1F469}\\x{200D}\\x{1F4BB}', // E4.0   [1] (👩‍💻)
        '\\x{1F469}\\x{200D}\\x{1F4BC}', // E4.0   [1] (👩‍💼)
        '\\x{1F469}\\x{200D}\\x{1F527}', // E4.0   [1] (👩‍🔧)
        '\\x{1F469}\\x{200D}\\x{1F52C}', // E4.0   [1] (👩‍🔬)
        '\\x{1F469}\\x{200D}\\x{1F680}', // E4.0   [1] (👩‍🚀)
        '\\x{1F469}\\x{200D}\\x{1F692}', // E4.0   [1] (👩‍🚒)
        '\\x{1F469}\\x{200D}\\x{1F9AF}', // E12.0  [1] (👩‍🦯)
        '\\x{1F469}\\x{200D}\\x{1F9B0}', // E11.0  [1] (👩‍🦰)
        '\\x{1F469}\\x{200D}\\x{1F9B1}', // E11.0  [1] (👩‍🦱)
        '\\x{1F469}\\x{200D}\\x{1F9B2}', // E11.0  [1] (👩‍🦲)
        '\\x{1F469}\\x{200D}\\x{1F9B3}', // E11.0  [1] (👩‍🦳)
        '\\x{1F469}\\x{200D}\\x{1F9BC}', // E12.0  [1] (👩‍🦼)
        '\\x{1F469}\\x{200D}\\x{1F9BD}', // E12.0  [1] (👩‍🦽)
        '\\x{1F62E}\\x{200D}\\x{1F4A8}', // E13.1  [1] (😮‍💨)
        '\\x{1F635}\\x{200D}\\x{1F4AB}', // E13.1  [1] (😵‍💫)
        '\\x{1F9D1}\\x{200D}\\x{1F33E}', // E12.1  [1] (🧑‍🌾)
        '\\x{1F9D1}\\x{200D}\\x{1F373}', // E12.1  [1] (🧑‍🍳)
        '\\x{1F9D1}\\x{200D}\\x{1F37C}', // E13.0  [1] (🧑‍🍼)
        '\\x{1F9D1}\\x{200D}\\x{1F384}', // E13.0  [1] (🧑‍🎄)
        '\\x{1F9D1}\\x{200D}\\x{1F393}', // E12.1  [1] (🧑‍🎓)
        '\\x{1F9D1}\\x{200D}\\x{1F3A4}', // E12.1  [1] (🧑‍🎤)
        '\\x{1F9D1}\\x{200D}\\x{1F3A8}', // E12.1  [1] (🧑‍🎨)
        '\\x{1F9D1}\\x{200D}\\x{1F3EB}', // E12.1  [1] (🧑‍🏫)
        '\\x{1F9D1}\\x{200D}\\x{1F3ED}', // E12.1  [1] (🧑‍🏭)
        '\\x{1F9D1}\\x{200D}\\x{1F4BB}', // E12.1  [1] (🧑‍💻)
        '\\x{1F9D1}\\x{200D}\\x{1F4BC}', // E12.1  [1] (🧑‍💼)
        '\\x{1F9D1}\\x{200D}\\x{1F527}', // E12.1  [1] (🧑‍🔧)
        '\\x{1F9D1}\\x{200D}\\x{1F52C}', // E12.1  [1] (🧑‍🔬)
        '\\x{1F9D1}\\x{200D}\\x{1F680}', // E12.1  [1] (🧑‍🚀)
        '\\x{1F9D1}\\x{200D}\\x{1F692}', // E12.1  [1] (🧑‍🚒)
        '\\x{1F9D1}\\x{200D}\\x{1F9AF}', // E12.1  [1] (🧑‍🦯)
        '\\x{1F9D1}\\x{200D}\\x{1F9B0}', // E12.1  [1] (🧑‍🦰)
        '\\x{1F9D1}\\x{200D}\\x{1F9B1}', // E12.1  [1] (🧑‍🦱)
        '\\x{1F9D1}\\x{200D}\\x{1F9B2}', // E12.1  [1] (🧑‍🦲)
        '\\x{1F9D1}\\x{200D}\\x{1F9B3}', // E12.1  [1] (🧑‍🦳)
        '\\x{1F9D1}\\x{200D}\\x{1F9BC}', // E12.1  [1] (🧑‍🦼)
        '\\x{1F9D1}\\x{200D}\\x{1F9BD}', // E12.1  [1] (🧑‍🦽)
    ];

    private static string $emojiPattern;

    /**
     * Get the pattern matching an emoji
     *
     * This is not a full regexp (it does not have delimiters) and so can be included
     * in a larger regexp. The returned pattern is wrapped in a non-capturing group to allow
     * using it safely when embedding it. The returned pattern does not contain any capturing
     * groups.
     *
     * The returned pattern is only suitable for usage with UTF-8. It requires the `u` modifier.
     */
    public static function getEmojiPattern(): string
    {
        if (isset(self::$emojiPattern)) {
            return self::$emojiPattern;
        }

        // The "emoji" group needs to be followed by a special character to be rendered like emoji.
        $emojiVariants = '(?:'.implode('|', self::EMOJI_PATTERNS).')\x{FE0F}';

        // Emoji can be followed by optional combining marks. The standard
        // says only keycaps and backslash are likely to be supported.
        $combiningMarks = '[\x{20E3}\x{20E0}]';

        // "Presentation" characters are rendered as emoji by default and need no variant.
        $emojiPresentation = implode('|', self::EMOJI_PRESENTATION_PATTERNS);

        // Some other emoji are sequences of characters.
        $zwjSequences = implode('|', self::ZWJ_SEQUENCE_PATTERNS);
        $otherSequences = implode('|', self::SEQUENCE_PATTERNS);

        return self::$emojiPattern = '(?:(?:'.$zwjSequences.'|'.$otherSequences.'|'.$emojiVariants.'|'.$emojiPresentation.')(?:'.$combiningMarks.')?)';
    }
}
