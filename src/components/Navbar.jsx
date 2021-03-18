import React from 'react'
import harmseDigitalLogo from '../img/harmse-digital-logo.png';

export default function Navbar() {
    return (
        <header className="fixedToTop w-100">
            <div className="quickCTA">
                <ul className="d-flex flex-row mr-auto my-0">
                    <li><i></i> <a href="tel:061 559 2567" className="quickCTAlinks">061 559 2567</a></li>
                    <span className="mx-3"></span>
                    <li><i></i><a href="mailto:info@harmsedigital.co.za" className="quickCTAlinks">info@harmsedigital.co.za</a></li>
                </ul>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light d-flex flex-column whiteBG">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img className="img-fluid" width="150px" src={harmseDigitalLogo}/>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">Printing</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">Marketing</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">VOIP</a>
                            </li>

                            <button className="yellowBtn ml-2">Contact us</button>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    )
}
