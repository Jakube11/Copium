// 0 - No vote, 1 = downvote, 2 = upvote
let vote = 0;
update_vote = function(){
    if (vote == 0){ 
        console.log("vote is 0")   
        document.getElementById("upvote").src = "/img/votebc.png";
        document.getElementById("downvote").src = "/img/votebc.png";
    }
    else if (vote == 1){
        document.getElementById("upvote").src = "/img/votebc.png";
        document.getElementById("downvote").src = "/img/votebf.png";
    }
    else if (vote == 2){
        document.getElementById("upvote").src = "/img/votebf.png";
        document.getElementById("downvote").src = "/img/votebc.png";
    }else{
        console.log("error")
    }
}

upvote = function(){
    if (vote == 2) {
        vote = 0;
    }else{
        vote = 2;
    }
    update_vote()
}

downvote = function(){
    if (vote == 1) {
        vote = 0;
    }else{
        vote = 1;
    }
    update_vote()
}

