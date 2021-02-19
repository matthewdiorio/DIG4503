import React, {useState, useEffect} from "react";
import axios from "axios";

const Posts = () => {
    const[posts, setPosts] = useState();

    useEffect (() => {
        axios.get('https://jsonplaceholder.typicode.com/posts').then((res) => {
            const responsePost = res.data;
            setPosts(responsePost);
        });
    },[])
    return(
        <div>
            <h1>Post Data</h1>
            {posts && 
            posts.map((post) => {
                const {id, title, body} = post;
                return(
                    <div key={id}>
                        <h4>{title}</h4>
                        <h5>{body}</h5>
                    </div>
                )
            })}
        </div>
    );
}

export default Posts;