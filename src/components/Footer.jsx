import React from 'react'

export default function Footer() {
    return (
        <footer className="footer row text-center py-3">
            <div className="col-sm-12 col-md-12 col-xl-4 col-lg-4 pt-4">
                <h4>About us</h4>
                <div className="blueLine"></div>
                <div className="d-flex flex-column">
                    <a href="#">Our Story</a>
                </div>
            </div>

            <div className="col-sm-12 col-md-12 col-xl-4 col-lg-4 pt-4">
                <div>
                    <h4>Products & Services</h4>
                    <div className="blueLine"></div>
                    <div className="d-flex flex-column">
                        <a href="#">Printing</a>
                        <a href="#">Marketing</a>
                        <a href="#">VOIP</a>
                        <a href="#">Innovative Notions</a>
                    </div>
                </div>
            </div>

            <div className="col-sm-12 col-md-12 col-xl-4 col-lg-4 pt-4">
                <h4>Contact</h4>
                <div className="blueLine"></div>
                <div className="d-flex flex-column">
                    <a href="#">Cape Town</a>
                </div>
            </div>

            <div className="col-sm-12 col-md-12 col-xl-12 col-lg-12 pt-4">
                <h4>HARMSE DIGITAL</h4>
            </div>

            <div className="h-divider text-center">
                <p className="py-2">2021 Harmse Digital Communications | Web Design by <a href="#">ONLive</a></p>
            </div>
        </footer>
    )
}
