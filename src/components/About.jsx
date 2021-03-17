import React from 'react'
import aboutImage from '../img/about-image.jpg'
export default function About() {
    return (
        <article className="aboutUsSection py-5">
            <div className="row mx-5 my-3">
                <div className="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img src={aboutImage} className="img-fluid" />
                </div>

                <div className="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex flex-column justify-content-center">
                    <h1>About us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur possimus eveniet iusto omnis laborum quia, laudantium non necessitatibus quasi eius? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid nostrum explicabo recusandae eveniet consequatur non quis amet vitae vel.</p>

                    <div>
                        <a className="whitePurpleBtn">Learn More</a>
                    </div>
                </div>
            </div>
        </article>
    )
}
