<?php
// This file was auto-generated from sdk-root/src/data/ec2-instance-connect/2018-04-02/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Amazon EC2 Instance Connect enables system administrators to publish one-time use SSH public keys to EC2, providing users a simple and secure way to connect to their instances.</p>', 'operations' => [ 'SendSSHPublicKey' => '<p>Pushes an SSH public key to the specified EC2 instance for use by the specified user. The key remains for 60 seconds. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Connect-using-EC2-Instance-Connect.html">Connect to your Linux instance using EC2 Instance Connect</a> in the <i>Amazon EC2 User Guide</i>.</p>', 'SendSerialConsoleSSHPublicKey' => '<p>Pushes an SSH public key to the specified EC2 instance. The key remains for 60 seconds, which gives you 60 seconds to establish a serial console connection to the instance using SSH. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-serial-console.html">EC2 Serial Console</a> in the <i>Amazon EC2 User Guide</i>.</p>', ], 'shapes' => [ 'AuthException' => [ 'base' => '<p>Either your AWS credentials are not valid or you do not have access to the EC2 instance.</p>', 'refs' => [], ], 'AvailabilityZone' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyRequest$AvailabilityZone' => '<p>The Availability Zone in which the EC2 instance was launched.</p>', ], ], 'EC2InstanceNotFoundException' => [ 'base' => '<p>The specified instance was not found.</p>', 'refs' => [], ], 'EC2InstanceStateInvalidException' => [ 'base' => '<p>Unable to connect because the instance is not in a valid state. Connecting to a stopped or terminated instance is not supported. If the instance is stopped, start your instance, and try to connect again.</p>', 'refs' => [], ], 'EC2InstanceTypeInvalidException' => [ 'base' => '<p>The instance type is not supported for connecting via the serial console. Only Nitro instance types are currently supported.</p>', 'refs' => [], ], 'EC2InstanceUnavailableException' => [ 'base' => '<p>The instance is currently unavailable. Wait a few minutes and try again.</p>', 'refs' => [], ], 'InstanceId' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyRequest$InstanceId' => '<p>The ID of the EC2 instance.</p>', 'SendSerialConsoleSSHPublicKeyRequest$InstanceId' => '<p>The ID of the EC2 instance.</p>', ], ], 'InstanceOSUser' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyRequest$InstanceOSUser' => '<p>The OS user on the EC2 instance for whom the key can be used to authenticate.</p>', ], ], 'InvalidArgsException' => [ 'base' => '<p>One of the parameters is not valid.</p>', 'refs' => [], ], 'RequestId' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyResponse$RequestId' => '<p>The ID of the request. Please provide this ID when contacting AWS Support for assistance.</p>', 'SendSerialConsoleSSHPublicKeyResponse$RequestId' => '<p>The ID of the request. Please provide this ID when contacting AWS Support for assistance.</p>', ], ], 'SSHPublicKey' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyRequest$SSHPublicKey' => '<p>The public key material. To use the public key, you must have the matching private key.</p>', 'SendSerialConsoleSSHPublicKeyRequest$SSHPublicKey' => '<p>The public key material. To use the public key, you must have the matching private key. For information about the supported key formats and lengths, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html#how-to-generate-your-own-key-and-import-it-to-aws">Requirements for key pairs</a> in the <i>Amazon EC2 User Guide</i>.</p>', ], ], 'SendSSHPublicKeyRequest' => [ 'base' => NULL, 'refs' => [], ], 'SendSSHPublicKeyResponse' => [ 'base' => NULL, 'refs' => [], ], 'SendSerialConsoleSSHPublicKeyRequest' => [ 'base' => NULL, 'refs' => [], ], 'SendSerialConsoleSSHPublicKeyResponse' => [ 'base' => NULL, 'refs' => [], ], 'SerialConsoleAccessDisabledException' => [ 'base' => '<p>Your account is not authorized to use the EC2 Serial Console. To authorize your account, run the EnableSerialConsoleAccess API. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/APIReference/API_EnableSerialConsoleAccess.html">EnableSerialConsoleAccess</a> in the <i>Amazon EC2 API Reference</i>.</p>', 'refs' => [], ], 'SerialConsoleSessionLimitExceededException' => [ 'base' => '<p>The instance currently has 1 active serial console session. Only 1 session is supported at a time.</p>', 'refs' => [], ], 'SerialConsoleSessionUnavailableException' => [ 'base' => '<p>Unable to start a serial console session. Please try again.</p>', 'refs' => [], ], 'SerialPort' => [ 'base' => NULL, 'refs' => [ 'SendSerialConsoleSSHPublicKeyRequest$SerialPort' => '<p>The serial port of the EC2 instance. Currently only port 0 is supported.</p> <p>Default: 0</p>', ], ], 'ServiceException' => [ 'base' => '<p>The service encountered an error. Follow the instructions in the error message and try again.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AuthException$Message' => NULL, 'EC2InstanceNotFoundException$Message' => NULL, 'EC2InstanceStateInvalidException$Message' => NULL, 'EC2InstanceTypeInvalidException$Message' => NULL, 'EC2InstanceUnavailableException$Message' => NULL, 'InvalidArgsException$Message' => NULL, 'SerialConsoleAccessDisabledException$Message' => NULL, 'SerialConsoleSessionLimitExceededException$Message' => NULL, 'SerialConsoleSessionUnavailableException$Message' => NULL, 'ServiceException$Message' => NULL, 'ThrottlingException$Message' => NULL, ], ], 'Success' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyResponse$Success' => '<p>Is true if the request succeeds and an error otherwise.</p>', 'SendSerialConsoleSSHPublicKeyResponse$Success' => '<p>Is true if the request succeeds and an error otherwise.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>The requests were made too frequently and have been throttled. Wait a while and try again. To increase the limit on your request frequency, contact AWS Support.</p>', 'refs' => [], ], ],];
