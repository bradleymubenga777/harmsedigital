import React from 'react'

export default function NewsLetter() {
    return (
        <article className="py-5 pinkBackGround">
            <div className="text-center">
                <h1 className="whiteText">Stay Connected</h1>
                <p className="whiteText">Subscribe to our newsletter</p>

                <form className="d-flex justify-content-center">
                    <input className="myInput" placeholder="Type your email here" type="email"></input>
                    <a className="whiteBlueBtn ml-2">Subscribe</a>
                </form>
            </div>
        </article>
    )
}
