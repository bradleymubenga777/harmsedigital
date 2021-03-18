import React from 'react';
import harmseDigitalGreyLogo from '../img/harmse-digital-logo-greyscale.png';

export default function Footer() {
    return (
        <footer className="footer row text-center py-3">
            <div className="col-sm-12 col-md-12 col-xl-4 col-lg-4 pt-4">
                <h4>About us</h4>
                <div className="blueLine"></div>
                <div className="d-flex flex-column">
                    <a href="#" className="blueLink">Our Story</a>
                </div>
            </div>

            <div className="col-sm-12 col-md-12 col-xl-4 col-lg-4 pt-4">
                <div>
                    <h4>Products & Services</h4>
                    <div className="blueLine"></div>
                    <div className="d-flex flex-column">
                        <a href="#" className="blueLink">Printing</a>
                        <a href="#" className="blueLink">Marketing</a>
                        <a href="#" className="blueLink">VOIP</a>
                        <a href="#" className="blueLink">Innovative Notions</a>
                    </div>
                </div>
            </div>

            <div className="col-sm-12 col-md-12 col-xl-4 col-lg-4 pt-4">
                <h4>Contact</h4>
                <div className="blueLine"></div>
                <div className="d-flex flex-column">
                    <a href="#" className="blueLink">Cape Town</a>
                </div>
            </div>

            <div className="col-sm-12 col-md-12 col-xl-12 col-lg-12 py-4">
                <img src={harmseDigitalGreyLogo} className="img-fluid" width="200px"/>
            </div>

            <div className="h-divider text-center">
                <p className="py-2 responsiveText">2021 Harmse Digital Communications | Web Design by <a href="#" className="blueLink">ONLive</a></p>
            </div>
        </footer>
    )
}
