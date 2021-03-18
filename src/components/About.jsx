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
                    <p>We are a group of professionals providing quality services to businesses across South Africa. We provide custom made Print, Design and Marketing Solutions as well as VolP Solutions for your brand and service that your provide, in accordance with the vision of your company.</p>

                    <div>
                        <a className="whitePurpleBtn">Learn More</a>
                    </div>
                </div>
            </div>
        </article>
    )
}
