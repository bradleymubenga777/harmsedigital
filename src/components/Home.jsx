import React from 'react'
import About from './About';
import NewsLetter from './NewsLetter';
import Footer from './Footer';

export default function Home() {
    return (
        <section>
            <header>
                <div className="heroImg d-flex flex-column align-items-center justify-content-center">
                    <h1 className="textHero">BUILD YOUR</h1>
                    <h1 className="textBlueBG heroText textHero">MARKETING</h1>
                    <h1 className="textHero">WITH US</h1>
                </div>
            </header>

            <article className="container py-5">
                <header className="text-center py-3">
                    <h1 className="headerOne">What We Do</h1>
                    <h1 className="blueLine"></h1>
                    <p>This is how we help your grow your business</p>
                </header>

                <div className="row text-center">
                    <div className="col-sm-12 col-md-6 col-lg-3 col-xl-3 my-3">
                        <a className="d-flex flex-column align-items-center">
                            <div className="roundBlueBG"></div>
                            <p className="pt-2">Printing</p>
                        </a>
                    </div>

                    <div className="col-sm-12 col-md-6 col-lg-3 col-xl-3 my-3">
                        <a className="d-flex flex-column align-items-center">
                            <div className="roundBlueBG"></div>
                            <p className="pt-2">Marketing</p>
                        </a>
                    </div>

                    <div className="col-sm-12 col-md-6 col-lg-3 col-xl-3 my-3">
                        <a className="d-flex flex-column align-items-center">
                            <div className="roundBlueBG"></div>
                            <p className="pt-2">VOIP</p>
                        </a>
                    </div>

                    <div className="col-sm-12 col-md-6 col-lg-3 col-xl-3 my-3">
                        <a className="d-flex flex-column align-items-center">
                            <div className="roundBlueBG"></div>
                            <p className="pt-2">Innovative Notions</p>
                        </a>
                    </div>
                </div>
            </article>

            <About/>
            <NewsLetter />
            <Footer />
        </section>
    )
}
