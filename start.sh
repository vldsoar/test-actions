#!/bin/bash
docker build . -t "vldsoar/test-actions"

echo "Running container in port 8000"

docker run -v ${PWD}:/var/www -p 8000:8000 "vldsoar/test-actions" php -S 0.0.0.0:8000