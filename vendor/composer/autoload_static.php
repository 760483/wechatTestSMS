<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf34fe158d1b390e87e05c480af944dd2
{
    public static $files = array(
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4ecaeafb8cfb009ad0e052c90355e98' => __DIR__ . '/..' . '/beberlei/assert/lib/Assert/functions.php',
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '95e93dde59ba013d6c65cb1ddc603681' => __DIR__ . '/../..' . '/myFunc.php',
        '1a8b9445f8d5ae4fb1a190c22242e38e' => __DIR__ . '/../..' . '/WeChat.class.php',
    );

    public static $prefixLengthsPsr4 = array(
        'W' =>
            array(
                'WeChat\\' => 7,
            ),
        'S' =>
            array(
                'Symfony\\Polyfill\\Mbstring\\' => 26,
            ),
        'R' =>
            array(
                'React\\Promise\\' => 14,
                'React\\EventLoop\\' => 16,
            ),
        'P' =>
            array(
                'Psr\\Log\\' => 8,
                'PhpAmqpLib\\' => 11,
            ),
        'M' =>
            array(
                'Mdanter\\Ecc\\' => 12,
            ),
        'F' =>
            array(
                'FG\\' => 3,
            ),
        'B' =>
            array(
                'Bunny\\' => 6,
            ),
        'A' =>
            array(
                'Assert\\' => 7,
                'AESKW\\' => 6,
                'AESGCM\\' => 7,
            ),
    );

    public static $prefixDirsPsr4 = array(
        'WeChat\\' =>
            array(
                0 => __DIR__ . '/../..' . '/src/wechat',
            ),
        'Symfony\\Polyfill\\Mbstring\\' =>
            array(
                0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
            ),
        'React\\Promise\\' =>
            array(
                0 => __DIR__ . '/..' . '/react/promise/src',
            ),
        'React\\EventLoop\\' =>
            array(
                0 => __DIR__ . '/..' . '/react/event-loop/src',
            ),
        'Psr\\Log\\' =>
            array(
                0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
            ),
        'PhpAmqpLib\\' =>
            array(
                0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
            ),
        'Mdanter\\Ecc\\' =>
            array(
                0 => __DIR__ . '/..' . '/mdanter/ecc/src',
            ),
        'FG\\' =>
            array(
                0 => __DIR__ . '/..' . '/fgrosse/phpasn1/lib',
            ),
        'Bunny\\' =>
            array(
                0 => __DIR__ . '/..' . '/bunny/bunny/src/Bunny',
                1 => __DIR__ . '/..' . '/bunny/bunny/test/Bunny',
            ),
        'Assert\\' =>
            array(
                0 => __DIR__ . '/..' . '/beberlei/assert/lib/Assert',
            ),
        'AESKW\\' =>
            array(
                0 => __DIR__ . '/..' . '/sop/aes-kw/lib/AESKW',
            ),
        'AESGCM\\' =>
            array(
                0 => __DIR__ . '/..' . '/spomky-labs/php-aes-gcm/src',
            ),
    );

    public static $prefixesPsr0 = array(
        'M' =>
            array(
                'Monolog' =>
                    array(
                        0 => __DIR__ . '/..' . '/monolog/monolog/src',
                    ),
            ),
    );

    public static $classMap = array(
        'AccountUser' => __DIR__ . '/../..' . '/AccountUser.php',
        'Bunny\\AbstractClient' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/AbstractClient.php',
        'Bunny\\AsyncClientTest' => __DIR__ . '/..' . '/bunny/bunny/test/Bunny/AsyncClientTest.php',
        'Bunny\\Async\\Client' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Async/Client.php',
        'Bunny\\Channel' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Channel.php',
        'Bunny\\ChannelMethods' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ChannelMethods.php',
        'Bunny\\ChannelModeEnum' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ChannelModeEnum.php',
        'Bunny\\ChannelStateEnum' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ChannelStateEnum.php',
        'Bunny\\ChannelTest' => __DIR__ . '/..' . '/bunny/bunny/test/Bunny/ChannelTest.php',
        'Bunny\\Client' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Client.php',
        'Bunny\\ClientMethods' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ClientMethods.php',
        'Bunny\\ClientStateEnum' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ClientStateEnum.php',
        'Bunny\\ClientTest' => __DIR__ . '/..' . '/bunny/bunny/test/Bunny/ClientTest.php',
        'Bunny\\Constants' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Constants.php',
        'Bunny\\Exception\\BufferUnderflowException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/BufferUnderflowException.php',
        'Bunny\\Exception\\BunnyException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/BunnyException.php',
        'Bunny\\Exception\\ChannelException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/ChannelException.php',
        'Bunny\\Exception\\ClientException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/ClientException.php',
        'Bunny\\Exception\\FrameEndInvalidException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/FrameEndInvalidException.php',
        'Bunny\\Exception\\InvalidClassException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/InvalidClassException.php',
        'Bunny\\Exception\\InvalidMethodException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/InvalidMethodException.php',
        'Bunny\\Exception\\ProtocolException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/ProtocolException.php',
        'Bunny\\Message' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Message.php',
        'Bunny\\Protocol\\AbstractFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/AbstractFrame.php',
        'Bunny\\Protocol\\Buffer' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/Buffer.php',
        'Bunny\\Protocol\\BufferTest' => __DIR__ . '/..' . '/bunny/bunny/test/Bunny/Protocol/BufferTest.php',
        'Bunny\\Protocol\\ContentBodyFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ContentBodyFrame.php',
        'Bunny\\Protocol\\ContentHeaderFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ContentHeaderFrame.php',
        'Bunny\\Protocol\\HeartbeatFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/HeartbeatFrame.php',
        'Bunny\\Protocol\\MethodAccessRequestFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodAccessRequestFrame.php',
        'Bunny\\Protocol\\MethodAccessRequestOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodAccessRequestOkFrame.php',
        'Bunny\\Protocol\\MethodBasicAckFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicAckFrame.php',
        'Bunny\\Protocol\\MethodBasicCancelFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicCancelFrame.php',
        'Bunny\\Protocol\\MethodBasicCancelOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicCancelOkFrame.php',
        'Bunny\\Protocol\\MethodBasicConsumeFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicConsumeFrame.php',
        'Bunny\\Protocol\\MethodBasicConsumeOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicConsumeOkFrame.php',
        'Bunny\\Protocol\\MethodBasicDeliverFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicDeliverFrame.php',
        'Bunny\\Protocol\\MethodBasicGetEmptyFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicGetEmptyFrame.php',
        'Bunny\\Protocol\\MethodBasicGetFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicGetFrame.php',
        'Bunny\\Protocol\\MethodBasicGetOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicGetOkFrame.php',
        'Bunny\\Protocol\\MethodBasicNackFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicNackFrame.php',
        'Bunny\\Protocol\\MethodBasicPublishFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicPublishFrame.php',
        'Bunny\\Protocol\\MethodBasicQosFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicQosFrame.php',
        'Bunny\\Protocol\\MethodBasicQosOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicQosOkFrame.php',
        'Bunny\\Protocol\\MethodBasicRecoverAsyncFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicRecoverAsyncFrame.php',
        'Bunny\\Protocol\\MethodBasicRecoverFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicRecoverFrame.php',
        'Bunny\\Protocol\\MethodBasicRecoverOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicRecoverOkFrame.php',
        'Bunny\\Protocol\\MethodBasicRejectFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicRejectFrame.php',
        'Bunny\\Protocol\\MethodBasicReturnFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicReturnFrame.php',
        'Bunny\\Protocol\\MethodChannelCloseFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelCloseFrame.php',
        'Bunny\\Protocol\\MethodChannelCloseOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelCloseOkFrame.php',
        'Bunny\\Protocol\\MethodChannelFlowFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelFlowFrame.php',
        'Bunny\\Protocol\\MethodChannelFlowOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelFlowOkFrame.php',
        'Bunny\\Protocol\\MethodChannelOpenFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelOpenFrame.php',
        'Bunny\\Protocol\\MethodChannelOpenOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelOpenOkFrame.php',
        'Bunny\\Protocol\\MethodConfirmSelectFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConfirmSelectFrame.php',
        'Bunny\\Protocol\\MethodConfirmSelectOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConfirmSelectOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionBlockedFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionBlockedFrame.php',
        'Bunny\\Protocol\\MethodConnectionCloseFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionCloseFrame.php',
        'Bunny\\Protocol\\MethodConnectionCloseOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionCloseOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionOpenFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionOpenFrame.php',
        'Bunny\\Protocol\\MethodConnectionOpenOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionOpenOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionSecureFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionSecureFrame.php',
        'Bunny\\Protocol\\MethodConnectionSecureOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionSecureOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionStartFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionStartFrame.php',
        'Bunny\\Protocol\\MethodConnectionStartOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionStartOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionTuneFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionTuneFrame.php',
        'Bunny\\Protocol\\MethodConnectionTuneOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionTuneOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionUnblockedFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionUnblockedFrame.php',
        'Bunny\\Protocol\\MethodExchangeBindFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeBindFrame.php',
        'Bunny\\Protocol\\MethodExchangeBindOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeBindOkFrame.php',
        'Bunny\\Protocol\\MethodExchangeDeclareFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeDeclareFrame.php',
        'Bunny\\Protocol\\MethodExchangeDeclareOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeDeclareOkFrame.php',
        'Bunny\\Protocol\\MethodExchangeDeleteFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeDeleteFrame.php',
        'Bunny\\Protocol\\MethodExchangeDeleteOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeDeleteOkFrame.php',
        'Bunny\\Protocol\\MethodExchangeUnbindFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeUnbindFrame.php',
        'Bunny\\Protocol\\MethodExchangeUnbindOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeUnbindOkFrame.php',
        'Bunny\\Protocol\\MethodFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodFrame.php',
        'Bunny\\Protocol\\MethodQueueBindFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueBindFrame.php',
        'Bunny\\Protocol\\MethodQueueBindOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueBindOkFrame.php',
        'Bunny\\Protocol\\MethodQueueDeclareFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueDeclareFrame.php',
        'Bunny\\Protocol\\MethodQueueDeclareOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueDeclareOkFrame.php',
        'Bunny\\Protocol\\MethodQueueDeleteFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueDeleteFrame.php',
        'Bunny\\Protocol\\MethodQueueDeleteOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueDeleteOkFrame.php',
        'Bunny\\Protocol\\MethodQueuePurgeFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueuePurgeFrame.php',
        'Bunny\\Protocol\\MethodQueuePurgeOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueuePurgeOkFrame.php',
        'Bunny\\Protocol\\MethodQueueUnbindFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueUnbindFrame.php',
        'Bunny\\Protocol\\MethodQueueUnbindOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueUnbindOkFrame.php',
        'Bunny\\Protocol\\MethodTxCommitFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxCommitFrame.php',
        'Bunny\\Protocol\\MethodTxCommitOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxCommitOkFrame.php',
        'Bunny\\Protocol\\MethodTxRollbackFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxRollbackFrame.php',
        'Bunny\\Protocol\\MethodTxRollbackOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxRollbackOkFrame.php',
        'Bunny\\Protocol\\MethodTxSelectFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxSelectFrame.php',
        'Bunny\\Protocol\\MethodTxSelectOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxSelectOkFrame.php',
        'Bunny\\Protocol\\ProtocolReader' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ProtocolReader.php',
        'Bunny\\Protocol\\ProtocolReaderGenerated' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ProtocolReaderGenerated.php',
        'Bunny\\Protocol\\ProtocolWriter' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ProtocolWriter.php',
        'Bunny\\Protocol\\ProtocolWriterGenerated' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ProtocolWriterGenerated.php',
        'Bunny\\Test\\Exception\\TimeoutException' => __DIR__ . '/..' . '/bunny/bunny/test/Bunny/Test/Exception/TimeoutException.php',
        'wechat\\Decoder' => __DIR__ . '/../..' . '/src/wechat/Decoder.php',
        'wechat\\DecoderEx' => __DIR__ . '/../..' . '/src/wechat/DecoderEx.php',
        'wechat\\DecoderImpl' => __DIR__ . '/../..' . '/src/wechat/DecoderImpl.php',
        'wechat\\Encoder' => __DIR__ . '/../..' . '/src/wechat/Encoder.php',
        'wechat\\EncoderInfo' => __DIR__ . '/../..' . '/src/wechat/EncoderInfo.php',
        'wechat\\LargeInteger' => __DIR__ . '/../..' . '/src/wechat/LargeInteger.php',
        'wechat\\ObjectDefinition' => __DIR__ . '/../..' . '/src/wechat/ObjectDefinition.php',
        'wechat\\Object\\AcctSectResp' => __DIR__ . '/../..' . '/src/wechat/Object/AcctSectResp.php',
        'wechat\\Object\\AddMsg' => __DIR__ . '/../..' . '/src/wechat/Object/AddMsg.php',
        'wechat\\Object\\AdditionalContactList' => __DIR__ . '/../..' . '/src/wechat/Object/AdditionalContactList.php',
        'wechat\\Object\\ApInfo' => __DIR__ . '/../..' . '/src/wechat/Object/ApInfo.php',
        'wechat\\Object\\AuthSectResp' => __DIR__ . '/../..' . '/src/wechat/Object/AuthSectResp.php',
        'wechat\\Object\\AutoAuthAesReqData' => __DIR__ . '/../..' . '/src/wechat/Object/AutoAuthAesReqData.php',
        'wechat\\Object\\AutoAuthRsaReqData' => __DIR__ . '/../..' . '/src/wechat/Object/AutoAuthRsaReqData.php',
        'wechat\\Object\\BaseAuthReqInfo' => __DIR__ . '/../..' . '/src/wechat/Object/BaseAuthReqInfo.php',
        'wechat\\Object\\BuiltinIP' => __DIR__ . '/../..' . '/src/wechat/Object/BuiltinIP.php',
        'wechat\\Object\\BuiltinIPList' => __DIR__ . '/../..' . '/src/wechat/Object/BuiltinIPList.php',
        'wechat\\Object\\CDNDnsInfo' => __DIR__ . '/../..' . '/src/wechat/Object/CDNDnsInfo.php',
        'wechat\\Object\\ChatRoomMemberData' => __DIR__ . '/../..' . '/src/wechat/Object/ChatRoomMemberData.php',
        'wechat\\Object\\Cmd2' => __DIR__ . '/../..' . '/src/wechat/Object/Cmd2.php',
        'wechat\\Object\\Cmd5' => __DIR__ . '/../..' . '/src/wechat/Object/Cmd5.php',
        'wechat\\Object\\CmdItem' => __DIR__ . '/../..' . '/src/wechat/Object/CmdItem.php',
        'wechat\\Object\\CmdList' => __DIR__ . '/../..' . '/src/wechat/Object/CmdList.php',
        'wechat\\Object\\Config' => __DIR__ . '/../..' . '/src/wechat/Object/Config.php',
        'wechat\\Object\\CustomizedInfo' => __DIR__ . '/../..' . '/src/wechat/Object/CustomizedInfo.php',
        'wechat\\Object\\DisturbSetting' => __DIR__ . '/../..' . '/src/wechat/Object/DisturbSetting.php',
        'wechat\\Object\\DisturbTimeSpan' => __DIR__ . '/../..' . '/src/wechat/Object/DisturbTimeSpan.php',
        'wechat\\Object\\ECDHKey' => __DIR__ . '/../..' . '/src/wechat/Object/ECDHKey.php',
        'wechat\\Object\\EmojiInfo' => __DIR__ . '/../..' . '/src/wechat/Object/EmojiInfo.php',
        'wechat\\Object\\EmotionSummary' => __DIR__ . '/../..' . '/src/wechat/Object/EmotionSummary.php',
        'wechat\\Object\\FBFriend' => __DIR__ . '/../..' . '/src/wechat/Object/FBFriend.php',
        'wechat\\Object\\FunctionSwitch' => __DIR__ . '/../..' . '/src/wechat/Object/FunctionSwitch.php',
        'wechat\\Object\\GetReportStrategyReq' => __DIR__ . '/../..' . '/src/wechat/Object/GetReportStrategyReq.php',
        'wechat\\Object\\GetReportStrategyResp' => __DIR__ . '/../..' . '/src/wechat/Object/GetReportStrategyResp.php',
        'wechat\\Object\\GmailList' => __DIR__ . '/../..' . '/src/wechat/Object/GmailList.php',
        'wechat\\Object\\Host' => __DIR__ . '/../..' . '/src/wechat/Object/Host.php',
        'wechat\\Object\\HostList' => __DIR__ . '/../..' . '/src/wechat/Object/HostList.php',
        'wechat\\Object\\KeyVal' => __DIR__ . '/../..' . '/src/wechat/Object/KeyVal.php',
        'wechat\\Object\\LinkedinContactItem' => __DIR__ . '/../..' . '/src/wechat/Object/LinkedinContactItem.php',
        'wechat\\Object\\ListMFriendReq' => __DIR__ . '/../..' . '/src/wechat/Object/ListMFriendReq.php',
        'wechat\\Object\\ListMFriendResp' => __DIR__ . '/../..' . '/src/wechat/Object/ListMFriendResp.php',
        'wechat\\Object\\MFriend' => __DIR__ . '/../..' . '/src/wechat/Object/MFriend.php',
        'wechat\\Object\\ManualAuthAesReqData' => __DIR__ . '/../..' . '/src/wechat/Object/ManualAuthAesReqData.php',
        'wechat\\Object\\ManualAuthRsaReqData' => __DIR__ . '/../..' . '/src/wechat/Object/ManualAuthRsaReqData.php',
        'wechat\\Object\\Mobile' => __DIR__ . '/../..' . '/src/wechat/Object/Mobile.php',
        'wechat\\Object\\ModContact' => __DIR__ . '/../..' . '/src/wechat/Object/ModContact.php',
        'wechat\\Object\\ModSingleField' => __DIR__ . '/../..' . '/src/wechat/Object/ModSingleField.php',
        'wechat\\Object\\ModUserImg' => __DIR__ . '/../..' . '/src/wechat/Object/ModUserImg.php',
        'wechat\\Object\\ModUserInfo' => __DIR__ . '/../..' . '/src/wechat/Object/ModUserInfo.php',
        'wechat\\Object\\NetworkControl' => __DIR__ . '/../..' . '/src/wechat/Object/NetworkControl.php',
        'wechat\\Object\\NetworkSectResp' => __DIR__ . '/../..' . '/src/wechat/Object/NetworkSectResp.php',
        'wechat\\Object\\OplogRet' => __DIR__ . '/../..' . '/src/wechat/Object/OplogRet.php',
        'wechat\\Object\\Package' => __DIR__ . '/../..' . '/src/wechat/Object/Package.php',
        'wechat\\Object\\PatternLockInfo' => __DIR__ . '/../..' . '/src/wechat/Object/PatternLockInfo.php',
        'wechat\\Object\\PhoneNumListInfo' => __DIR__ . '/../..' . '/src/wechat/Object/PhoneNumListInfo.php',
        'wechat\\Object\\PluginKey' => __DIR__ . '/../..' . '/src/wechat/Object/PluginKey.php',
        'wechat\\Object\\PluginKeyList' => __DIR__ . '/../..' . '/src/wechat/Object/PluginKeyList.php',
        'wechat\\Object\\RealTimeKVReportReq' => __DIR__ . '/../..' . '/src/wechat/Object/RealTimeKVReportReq.php',
        'wechat\\Object\\RealTimeKVReportResp' => __DIR__ . '/../..' . '/src/wechat/Object/RealTimeKVReportResp.php',
        'wechat\\Object\\RegApInfo' => __DIR__ . '/../..' . '/src/wechat/Object/RegApInfo.php',
        'wechat\\Object\\SKBuiltinBuffer_t' => __DIR__ . '/../..' . '/src/wechat/Object/SKBuiltinBuffer_t.php',
        'wechat\\Object\\SKBuiltinString_t' => __DIR__ . '/../..' . '/src/wechat/Object/SKBuiltinString_t.php',
        'wechat\\Object\\SafeDeviceList' => __DIR__ . '/../..' . '/src/wechat/Object/SafeDeviceList.php',
        'wechat\\Object\\SearchContactItem' => __DIR__ . '/../..' . '/src/wechat/Object/SearchContactItem.php',
        'wechat\\Object\\SecAuthRegKeySect' => __DIR__ . '/../..' . '/src/wechat/Object/SecAuthRegKeySect.php',
        'wechat\\Object\\ShowStyleKey' => __DIR__ . '/../..' . '/src/wechat/Object/ShowStyleKey.php',
        'wechat\\Object\\ShowWordsInfo' => __DIR__ . '/../..' . '/src/wechat/Object/ShowWordsInfo.php',
        'wechat\\Object\\SnsUserInfo' => __DIR__ . '/../..' . '/src/wechat/Object/SnsUserInfo.php',
        'wechat\\Object\\StrategyItem' => __DIR__ . '/../..' . '/src/wechat/Object/StrategyItem.php',
        'wechat\\Object\\StyleKeyVal' => __DIR__ . '/../..' . '/src/wechat/Object/StyleKeyVal.php',
        'wechat\\Object\\SyncKey' => __DIR__ . '/../..' . '/src/wechat/Object/SyncKey.php',
        'wechat\\Object\\UserInfoExt' => __DIR__ . '/../..' . '/src/wechat/Object/UserInfoExt.php',
        'wechat\\Object\\VerifyUser' => __DIR__ . '/../..' . '/src/wechat/Object/VerifyUser.php',
        'wechat\\Object\\WTLoginImgReqInfo' => __DIR__ . '/../..' . '/src/wechat/Object/WTLoginImgReqInfo.php',
        'wechat\\Object\\WTLoginImgRespInfo' => __DIR__ . '/../..' . '/src/wechat/Object/WTLoginImgRespInfo.php',
        'wechat\\Object\\WxVerifyCodeReqInfo' => __DIR__ . '/../..' . '/src/wechat/Object/WxVerifyCodeReqInfo.php',
        'wechat\\Object\\WxVerifyCodeRespInfo' => __DIR__ . '/../..' . '/src/wechat/Object/WxVerifyCodeRespInfo.php',
        'wechat\\PBClassInfo' => __DIR__ . '/../..' . '/src/wechat/PBClassInfo.php',
        'wechat\\Request\\APCheckRequest' => __DIR__ . '/../..' . '/src/wechat/Request/APCheckRequest.php',
        'wechat\\Request\\BaseRequest' => __DIR__ . '/../..' . '/src/wechat/Request/BaseRequest.php',
        'wechat\\Request\\BindOpMobileRequest' => __DIR__ . '/../..' . '/src/wechat/Request/BindOpMobileRequest.php',
        'wechat\\Request\\GetBoundHardDevicesRequest' => __DIR__ . '/../..' . '/src/wechat/Request/GetBoundHardDevicesRequest.php',
        'wechat\\Request\\GetCDNDnsRequest' => __DIR__ . '/../..' . '/src/wechat/Request/GetCDNDnsRequest.php',
        'wechat\\Request\\GetCardCountRequest' => __DIR__ . '/../..' . '/src/wechat/Request/GetCardCountRequest.php',
        'wechat\\Request\\GetContactLabelListRequest' => __DIR__ . '/../..' . '/src/wechat/Request/GetContactLabelListRequest.php',
        'wechat\\Request\\GetContactRequest' => __DIR__ . '/../..' . '/src/wechat/Request/GetContactRequest.php',
        'wechat\\Request\\GetEmotionListRequest' => __DIR__ . '/../..' . '/src/wechat/Request/GetEmotionListRequest.php',
        'wechat\\Request\\GetMFriendRequest' => __DIR__ . '/../..' . '/src/wechat/Request/GetMFriendRequest.php',
        'wechat\\Request\\GetPackageListRequest' => __DIR__ . '/../..' . '/src/wechat/Request/GetPackageListRequest.php',
        'wechat\\Request\\GetProfileRequest' => __DIR__ . '/../..' . '/src/wechat/Request/GetProfileRequest.php',
        'wechat\\Request\\LogOutRequest' => __DIR__ . '/../..' . '/src/wechat/Request/LogOutRequest.php',
        'wechat\\Request\\ManualAuthRequest' => __DIR__ . '/../..' . '/src/wechat/Request/ManualAuthRequest.php',
        'wechat\\Request\\MicroMsgRequest' => __DIR__ . '/../..' . '/src/wechat/Request/MicroMsgRequest.php',
        'wechat\\Request\\NewInitRequest' => __DIR__ . '/../..' . '/src/wechat/Request/NewInitRequest.php',
        'wechat\\Request\\NewRegRequest' => __DIR__ . '/../..' . '/src/wechat/Request/NewRegRequest.php',
        'wechat\\Request\\NewSyncRequest' => __DIR__ . '/../..' . '/src/wechat/Request/NewSyncRequest.php',
        'wechat\\Request\\OplogRequest' => __DIR__ . '/../..' . '/src/wechat/Request/OplogRequest.php',
        'wechat\\Request\\QueryHasPswdRequest' => __DIR__ . '/../..' . '/src/wechat/Request/QueryHasPswdRequest.php',
        'wechat\\Request\\SearchContactRequest' => __DIR__ . '/../..' . '/src/wechat/Request/SearchContactRequest.php',
        'wechat\\Request\\SendMsgRequest' => __DIR__ . '/../..' . '/src/wechat/Request/SendMsgRequest.php',
        'wechat\\Request\\SetPwdRequest' => __DIR__ . '/../..' . '/src/wechat/Request/SetPwdRequest.php',
        'wechat\\Request\\ShareCardSyncRequest' => __DIR__ . '/../..' . '/src/wechat/Request/ShareCardSyncRequest.php',
        'wechat\\Request\\SnsSyncRequest' => __DIR__ . '/../..' . '/src/wechat/Request/SnsSyncRequest.php',
        'wechat\\Request\\UploadContactsRequest' => __DIR__ . '/../..' . '/src/wechat/Request/UploadContactsRequest.php',
        'wechat\\Request\\UploadMyPanelListRequest' => __DIR__ . '/../..' . '/src/wechat/Request/UploadMyPanelListRequest.php',
        'wechat\\Request\\VerifyUserRequest' => __DIR__ . '/../..' . '/src/wechat/Request/VerifyUserRequest.php',
        'wechat\\Response\\APCheckResponse' => __DIR__ . '/../..' . '/src/wechat/Response/APCheckResponse.php',
        'wechat\\Response\\BaseResponse' => __DIR__ . '/../..' . '/src/wechat/Response/BaseResponse.php',
        'wechat\\Response\\BatchEmojiDownLoadResponse' => __DIR__ . '/../..' . '/src/wechat/Response/BatchEmojiDownLoadResponse.php',
        'wechat\\Response\\BindOpMobileResponse' => __DIR__ . '/../..' . '/src/wechat/Response/BindOpMobileResponse.php',
        'wechat\\Response\\CardSyncResponse' => __DIR__ . '/../..' . '/src/wechat/Response/CardSyncResponse.php',
        'wechat\\Response\\DownLoadPackageResponse' => __DIR__ . '/../..' . '/src/wechat/Response/DownLoadPackageResponse.php',
        'wechat\\Response\\GetCDNDnsResponse' => __DIR__ . '/../..' . '/src/wechat/Response/GetCDNDnsResponse.php',
        'wechat\\Response\\GetCardCountResponse' => __DIR__ . '/../..' . '/src/wechat/Response/GetCardCountResponse.php',
        'wechat\\Response\\GetContactResponse' => __DIR__ . '/../..' . '/src/wechat/Response/GetContactResponse.php',
        'wechat\\Response\\GetEmotionListResponse' => __DIR__ . '/../..' . '/src/wechat/Response/GetEmotionListResponse.php',
        'wechat\\Response\\GetMFriendResponse' => __DIR__ . '/../..' . '/src/wechat/Response/GetMFriendResponse.php',
        'wechat\\Response\\GetPackageListResponse' => __DIR__ . '/../..' . '/src/wechat/Response/GetPackageListResponse.php',
        'wechat\\Response\\GetProfileResponse' => __DIR__ . '/../..' . '/src/wechat/Response/GetProfileResponse.php',
        'wechat\\Response\\LogOutResponse' => __DIR__ . '/../..' . '/src/wechat/Response/LogOutResponse.php',
        'wechat\\Response\\MicroMsgResponse' => __DIR__ . '/../..' . '/src/wechat/Response/MicroMsgResponse.php',
        'wechat\\Response\\NewInitResponse' => __DIR__ . '/../..' . '/src/wechat/Response/NewInitResponse.php',
        'wechat\\Response\\NewRegResponse' => __DIR__ . '/../..' . '/src/wechat/Response/NewRegResponse.php',
        'wechat\\Response\\NewSyncResponse' => __DIR__ . '/../..' . '/src/wechat/Response/NewSyncResponse.php',
        'wechat\\Response\\OplogResponse' => __DIR__ . '/../..' . '/src/wechat/Response/OplogResponse.php',
        'wechat\\Response\\QueryHasPswdResponse' => __DIR__ . '/../..' . '/src/wechat/Response/QueryHasPswdResponse.php',
        'wechat\\Response\\SearchContactResponse' => __DIR__ . '/../..' . '/src/wechat/Response/SearchContactResponse.php',
        'wechat\\Response\\SendMsgResponse' => __DIR__ . '/../..' . '/src/wechat/Response/SendMsgResponse.php',
        'wechat\\Response\\SetPwdResponse' => __DIR__ . '/../..' . '/src/wechat/Response/SetPwdResponse.php',
        'wechat\\Response\\ShareCardSyncResponse' => __DIR__ . '/../..' . '/src/wechat/Response/ShareCardSyncResponse.php',
        'wechat\\Response\\SnsSyncResponse' => __DIR__ . '/../..' . '/src/wechat/Response/SnsSyncResponse.php',
        'wechat\\Response\\UnifyAuthResponse' => __DIR__ . '/../..' . '/src/wechat/Response/UnifyAuthResponse.php',
        'wechat\\Response\\UploadContactsResponse' => __DIR__ . '/../..' . '/src/wechat/Response/UploadContactsResponse.php',
        'wechat\\Response\\UploadMyPanelListResponse' => __DIR__ . '/../..' . '/src/wechat/Response/UploadMyPanelListResponse.php',
        'wechat\\Response\\VerifyUserResponse' => __DIR__ . '/../..' . '/src/wechat/Response/VerifyUserResponse.php',
        'wechat\\WXPBGeneratedMessage' => __DIR__ . '/../..' . '/src/wechat/WXPBGeneratedMessage.php',
        'wechat\\mmtls\\AesGcmCrypter' => __DIR__ . '/../..' . '/src/wechat/mmtls/AesGcmCrypter.php',
        'wechat\\mmtls\\Alert' => __DIR__ . '/../..' . '/src/wechat/mmtls/Alert.php',
        'wechat\\mmtls\\CertificateVerify' => __DIR__ . '/../..' . '/src/wechat/mmtls/CertificateVerify.php',
        'wechat\\mmtls\\Channel' => __DIR__ . '/../..' . '/src/wechat/mmtls/Channel.php',
        'wechat\\mmtls\\ClientChannelProcessor' => __DIR__ . '/../..' . '/src/wechat/mmtls/ClientChannelProcessor.php',
        'wechat\\mmtls\\ClientHandShakeState' => __DIR__ . '/../..' . '/src/wechat/mmtls/ClientHandShakeState.php',
        'wechat\\mmtls\\ClientHello' => __DIR__ . '/../..' . '/src/wechat/mmtls/ClientHello.php',
        'wechat\\mmtls\\ClientPsk' => __DIR__ . '/../..' . '/src/wechat/mmtls/ClientPsk.php',
        'wechat\\mmtls\\ConnectionCipherState' => __DIR__ . '/../..' . '/src/wechat/mmtls/ConnectionCipherState.php',
        'wechat\\mmtls\\ConnectionKeys' => __DIR__ . '/../..' . '/src/wechat/mmtls/ConnectionKeys.php',
        'wechat\\mmtls\\ConnectionSeqNumbers' => __DIR__ . '/../..' . '/src/wechat/mmtls/ConnectionSeqNumbers.php',
        'wechat\\mmtls\\CryptoUtil' => __DIR__ . '/../..' . '/src/wechat/mmtls/CryptoUtil.php',
        'wechat\\mmtls\\DataReader' => __DIR__ . '/../..' . '/src/wechat/mmtls/DataReader.php',
        'wechat\\mmtls\\EcKeyPair' => __DIR__ . '/../..' . '/src/wechat/mmtls/EcKeyPair.php',
        'wechat\\mmtls\\EncryptedExtension' => __DIR__ . '/../..' . '/src/wechat/mmtls/EncryptedExtension.php',
        'wechat\\mmtls\\Extensions' => __DIR__ . '/../..' . '/src/wechat/mmtls/Extensions.php',
        'wechat\\mmtls\\Extensions\\ClientKeyOffer' => __DIR__ . '/../..' . '/src/wechat/mmtls/Extensions/ClientKeyOffer.php',
        'wechat\\mmtls\\Extensions\\ClientKeyShare' => __DIR__ . '/../..' . '/src/wechat/mmtls/Extensions/ClientKeyShare.php',
        'wechat\\mmtls\\Extensions\\EarlyEncryptData' => __DIR__ . '/../..' . '/src/wechat/mmtls/Extensions/EarlyEncryptData.php',
        'wechat\\mmtls\\Extensions\\PreSharedKeyExtension' => __DIR__ . '/../..' . '/src/wechat/mmtls/Extensions/PreSharedKeyExtension.php',
        'wechat\\mmtls\\Extensions\\ServerKeyShareExstension' => __DIR__ . '/../..' . '/src/wechat/mmtls/Extensions/ServerKeyShareExstension.php',
        'wechat\\mmtls\\Finished' => __DIR__ . '/../..' . '/src/wechat/mmtls/Finished.php',
        'wechat\\mmtls\\HttpHandler' => __DIR__ . '/../..' . '/src/wechat/mmtls/HttpHandler.php',
        'wechat\\mmtls\\NewSessionTicket' => __DIR__ . '/../..' . '/src/wechat/mmtls/NewSessionTicket.php',
        'wechat\\mmtls\\OpenSslHash256' => __DIR__ . '/../..' . '/src/wechat/mmtls/OpenSslHash256.php',
        'wechat\\mmtls\\Psk' => __DIR__ . '/../..' . '/src/wechat/mmtls/Psk.php',
        'wechat\\mmtls\\Record' => __DIR__ . '/../..' . '/src/wechat/mmtls/Record.php',
        'wechat\\mmtls\\RecordHead' => __DIR__ . '/../..' . '/src/wechat/mmtls/RecordHead.php',
        'wechat\\mmtls\\RecordReader' => __DIR__ . '/../..' . '/src/wechat/mmtls/RecordReader.php',
        'wechat\\mmtls\\RecordWriter' => __DIR__ . '/../..' . '/src/wechat/mmtls/RecordWriter.php',
        'wechat\\mmtls\\SeverHello' => __DIR__ . '/../..' . '/src/wechat/mmtls/ServerHello.php',
        'wechat\\mmtls\\mmtlsString' => __DIR__ . '/../..' . '/src/wechat/mmtls/mmtlsString.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf34fe158d1b390e87e05c480af944dd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf34fe158d1b390e87e05c480af944dd2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf34fe158d1b390e87e05c480af944dd2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf34fe158d1b390e87e05c480af944dd2::$classMap;

        }, null, ClassLoader::class);
    }
}
